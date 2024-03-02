<?php

namespace App\Services\CallBackQuery;

use App\Enums\AuditorRole;
use App\Enums\KeyBoardData;
use App\Enums\ManuscriptStatus;
use App\Services\SendPostedByMessageService;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\User;

class QuickSubmissionService
{
    use AuditorRoleCheckService;
    use UpdateReviewGroupMessageButtonService;
    use SendPostedByMessageService;

    public function quick_submission($telegram,$callbackQuery, User $from,$botInfo,$manuscript,$chatId,$messageId,bool $isApproved): string
    {
        //获取审核群组信息
        $reviewGroup = $botInfo->review_group;

        //机器人的审核数
        $review_num = $botInfo->review_num;
        //通过人员名单
        $approved = $manuscript->approved;
        //通过人员数量
        $approvedNum = count($approved);
        //拒绝人员名单
        $reject = $manuscript->reject;
        //拒绝人员数量
        $rejectNum = count($reject);

        if ($this->baseCheck($telegram, $callbackQuery->id, $from->id, $reviewGroup->id) !== true) {
            return 'ok';
        }

        if ($this->roleCheck($telegram, $callbackQuery->id, $from->id, [
                AuditorRole::QUICK_APPROVAL,
                AuditorRole::QUICK_REJECTION,
            ]) !== true) {
            return 'ok';
        }

        if ($this->update_review_group_message_button($telegram, $botInfo, $chatId, $messageId, $manuscript, $review_num, $approvedNum, $rejectNum) === true) {
            return 'ok';
        }

        try {
            if ($isApproved) {
                $manuscript->one_approved = $from->toArray();
                $manuscript->status = ManuscriptStatus::APPROVED;
                $channelMessageId = $this->sendChannelMessage($telegram, $botInfo, $manuscript);
                $this->sendPostedByMessage($telegram, $manuscript, 1);
                $telegram->editMessageReplyMarkup([
                    'chat_id' => $chatId,
                    'message_id' => $messageId,
                    'reply_markup' => json_encode(KeyBoardData::REVIEW_GROUP_APPROVED),
                ]);
                $manuscript->message_id = $channelMessageId['message_id'];
                $manuscript->save();
            } else {
                $manuscript->one_reject = $from->toArray();
                $manuscript->status = ManuscriptStatus::REJECTED;
                $manuscript->save();
                $this->sendPostedByMessage($telegram, $manuscript, 2);
                $telegram->editMessageReplyMarkup([
                    'chat_id' => $chatId,
                    'message_id' => $messageId,
                    'reply_markup' => json_encode(KeyBoardData::REVIEW_GROUP_REJECT),
                ]);
            }

            return 'ok';
        } catch (TelegramSDKException $telegramSDKException) {
            Log::error($telegramSDKException);

            return 'error';
        }
    }
}

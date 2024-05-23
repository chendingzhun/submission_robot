<?php

namespace Database\Seeders;

use App\Models\KeyboardNameConfig;
use Illuminate\Database\Seeder;

class KeyboardNameConfigSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'group' => 'start',
                'name' => 'StartSubmission',
                'value' => '开始投稿',
                'description' => '底部初始键盘-开始投稿',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 2,
                'group' => 'start',
                'name' => 'Feedback',
                'value' => '意见反馈',
                'description' => '底部初始键盘-意见反馈',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 3,
                'group' => 'start',
                'name' => 'HelpCenter',
                'value' => '帮助中心',
                'description' => '底部初始键盘-帮助中心',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 4,
                'group' => 'submission',
                'name' => 'EndSending',
                'value' => '结束发送',
                'description' => '底部投稿键盘-结束发送',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 5,
                'group' => 'submission',
                'name' => 'Restart',
                'value' => '重新开始',
                'description' => '底部投稿键盘-重新开始',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 6,
                'group' => 'submission',
                'name' => 'CancelSubmission',
                'value' => '取消投稿',
                'description' => '底部投稿键盘-取消投稿',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 7,
                'group' => 'submission_end',
                'name' => 'ConfirmSubmissionOpen',
                'value' => '确认投稿（公开）',
                'description' => '底部投稿结束键盘-确认投稿（公开）',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 8,
                'group' => 'submission_end',
                'name' => 'ConfirmSubmissionAnonymous',
                'value' => '确认投稿（匿名）',
                'description' => '底部投稿结束键盘-确认投稿（匿名）',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 9,
                'group' => 'select_channel',
                'name' => 'SelectChannel',
                'value' => '选择频道',
                'description' => '底部选择频道键盘-选择频道',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 10,
                'group' => 'select_channel_end',
                'name' => 'SelectChannelAgain',
                'value' => '重新选择频道',
                'description' => '用户选择频道后结束投稿键盘-重新选择频道',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 11,
                'group' => 'review_group_approved',
                'name' => 'ApprovedEnd',
                'value' => '已通过',
                'description' => '（内联键盘）审核群组稿件通过显示的键盘-已通过',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 12,
                'group' => 'review_group_approved',
                'name' => 'ViewMessage',
                'value' => '查看消息',
                'description' => '（内联键盘）审核群组稿件通过显示的键盘-查看消息',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 13,
                'group' => 'review_group_approved',
                'name' => 'DeleteMessage',
                'value' => '删除消息',
                'description' => '（内联键盘）审核群组稿件通过显示的键盘-删除消息',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 14,
                'group' => 'review_group_rejected',
                'name' => 'RejectedEnd',
                'value' => '已拒绝',
                'description' => '（内联键盘）审核群组稿件拒绝显示的键盘-已拒绝',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 15,
                'group' => 'review_group_deleted',
                'name' => 'MessageDeleted',
                'value' => '消息已被删除',
                'description' => '（内联键盘）审核群组稿件删除显示的键盘-消息已被删除',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 16,
                'group' => 'white_list_user_submission',
                'name' => 'ViewMessage',
                'value' => '查看消息',
                'description' => '（内联键盘）白名单用户投稿完成发送到审核群组键盘-查看消息',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 17,
                'group' => 'white_list_user_submission',
                'name' => 'DeleteWhiteListUser',
                'value' => '删除白名单用户投稿',
                'description' => '（内联键盘）白名单用户投稿完成发送到审核群组键盘-删除白名单用户投稿',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 18,
                'group' => 'feedback',
                'name' => 'SubmitComplaint',
                'value' => '提交投诉',
                'description' => '用户开始意见反馈键盘-提交投诉',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 19,
                'group' => 'feedback',
                'name' => 'SubmitSuggestion',
                'value' => '提交建议',
                'description' => '用户开始意见反馈键盘-提交建议',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 21,
                'group' => 'complaint',
                'name' => 'EndSending',
                'value' => '结束发送',
                'description' => '用户开始投诉键盘-结束发送',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 22,
                'group' => 'complaint',
                'name' => 'Restart',
                'value' => '重新开始',
                'description' => '用户开始投诉键盘-重新开始',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 24,
                'group' => 'complaint_end',
                'name' => 'ConfirmComplaint',
                'value' => '确认投诉',
                'description' => '用户开始投诉键盘-确认投诉',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 25,
                'group' => 'start',
                'name' => 'error_and_submission',
                'value' => '快速投稿',
                'description' => '（内联键盘）用户发送错误消息的快速投稿按钮-快速投稿',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 26,
                'group' => 'common',
                'name' => 'Cancel',
                'value' => '取消',
                'description' => '通用键盘-取消，用于取消当前操作',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 27,
                'group' => 'submission',
                'name' => 'forward_origin_select_Yes',
                'value' => '是',
                'description' => '底部选择频道键盘-用户选择是否展示消息来源-是',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 28,
                'group' => 'submission',
                'name' => 'forward_origin_select_No',
                'value' => '否',
                'description' => '底部选择频道键盘-用户选择是否展示消息来源-否',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
        ];
        //        DB::table('config')->insert($data);
        foreach ($data as $item) {
            if (config('app.env') === 'local') {
                (new KeyboardNameConfig())->updateOrCreate(['id' => $item['id']], $item);
            } else {
                (new KeyboardNameConfig())->firstOrCreate(['id' => $item['id']], $item);
            }
        }
    }
}

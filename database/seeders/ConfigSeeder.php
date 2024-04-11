<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'group' => 'submission',
                'name' => 'start',
                'value' => "请直接发送您要投稿的内容\r\n发送完毕后，请点击下方的 “结束发送” 按钮。",
                'description' => '开始投稿提示语',
                'created_at' => '2023-09-17 08:12:22',
                'updated_at' => '2023-09-17 08:12:22',
            ],
            [
                'id' => 2,
                'group' => 'submission',
                'name' => 'restart',
                'value' => "已清空\r\n请重新发送内容。",
                'description' => '重新开始投稿提示语',
                'created_at' => '2023-09-17 08:37:09',
                'updated_at' => '2023-09-17 08:37:21',
            ],
            [
                'id' => 3,
                'group' => 'submission',
                'name' => 'cancel',
                'value' => '已取消投稿',
                'description' => '取消投稿提示语',
                'created_at' => '2023-09-17 08:39:01',
                'updated_at' => '2023-09-17 08:39:01',
            ],
            [
                'id' => 4,
                'group' => 'submission',
                'name' => 'error_for_text',
                'value' => '请点击下方的键盘按钮，或者发送对应的关键词。',
                'description' => '向Telegram聊天发送文本的错误消息。',
                'created_at' => '2023-09-17 08:40:58',
                'updated_at' => '2023-09-17 08:44:07',
            ],
            [
                'id' => 5,
                'group' => 'submission',
                'name' => 'start_text_tips',
                'value' => "已记录到草稿中。\r\n您可以继续发送新的内容来替换上一次的内容。\r\n当您觉得稿件内容合适时，点击下方的 “结束发送”。\r\n稿件草稿有效期为1天",
                'description' => '开始投稿输入内容的提示语',
                'created_at' => '2023-09-17 08:43:16',
                'updated_at' => '2023-09-17 08:43:48',
            ],
            [
                'id' => 6,
                'group' => 'submission',
                'name' => 'start_update_text_tips',
                'value' => "已更新当前稿件内容。\r\n您可以继续发送新的内容来替换上一次的内容。\r\n当您觉得稿件内容合适时，点击下方的 “结束发送”。\r\n稿件草稿有效期为1天",
                'description' => '开始投稿更新输入内容的提示语',
                'created_at' => '2023-09-17 08:45:06',
                'updated_at' => '2023-09-17 08:45:30',
            ],
            [
                'id' => 7,
                'group' => 'submission',
                'name' => 'preview_tips',
                'value' => "已生成预览。\r\n请确认您的投稿信息。",
                'description' => '预览投稿提示语',
                'created_at' => '2023-09-17 08:48:16',
                'updated_at' => '2023-09-17 08:48:41',
            ],
            [
                'id' => 8,
                'group' => 'submission',
                'name' => 'confirm',
                'value' => "✅ 投稿成功，我们将稍后通过机器人告知您审核结果，请保持联系畅通\r\n审核可能需要一定时间，如果您长时间未收到结果，可联系管理员。\r\n您现在可以开始下一个投稿。",
                'description' => '确认投稿提示语',
                'created_at' => '2023-09-17 08:49:45',
                'updated_at' => '2023-09-17 08:49:45',
            ],
            [
                'id' => 9,
                'group' => 'submission',
                'name' => 'review_approved_submission',
                'value' => '✅ 投稿已通过审核，已发送到频道。',
                'description' => '审核通过投稿提示语',
                'created_at' => '2023-11-23 21:13:00',
                'updated_at' => '2023-11-23 21:13:00',
            ],
            [
                'id' => 10,
                'group' => 'submission',
                'name' => 'review_rejected_submission',
                'value' => '❌ 投稿未通过审核，已删除。',
                'description' => '审核未通过投稿提示语',
                'created_at' => '2023-11-23 21:13:00',
                'updated_at' => '2023-11-23 21:13:00',
            ],
            [
                'id' => 11,
                'group' => 'submission',
                'name' => 'submission_is_empty',
                'value' => '您还没有输入任何内容，请重新输入！',
                'description' => '投稿内容为空提示语',
                'created_at' => '2023-11-23 21:13:00',
                'updated_at' => '2023-11-23 21:13:00',
            ],
            [
                'id' => 12,
                'group' => 'submission',
                'name' => 'confirm_white_list',
                'value' => '您已经在白名单中，您的投稿将直接发送到频道。',
                'description' => '确认白名单用户投稿提示语',
                'created_at' => '2023-11-23 21:13:00',
                'updated_at' => '2023-11-23 21:13:00',
            ],
            [
                'id' => 13,
                'group' => 'submission',
                'name' => 'black_list',
                'value' => '您已经在黑名单中，无法进行投稿操作。',
                'description' => '确认黑名单用户投稿提示语',
                'created_at' => '2023-11-23 21:13:00',
                'updated_at' => '2023-11-23 21:13:00',
            ],
            [
                'id' => 14,
                'group' => 'submission',
                'name' => 'review_delete_submission',
                'value' => '投稿已被管理员删除。您可以重新开始投稿。',
                'description' => '审核群组稿件删除提示语',
                'created_at' => '2023-11-23 21:13:00',
                'updated_at' => '2023-11-23 21:13:00',
            ],
            [
                'id' => 15,
                'group' => 'submission',
                'name' => 'preview_tips_channel',
                'value' => "已生成预览。\r\n请确认您的投稿信息。\r\n点击下方的 “选择发布频道” 按钮，选择将投稿发送到哪个频道。\r\n点击下方的 “重新编辑” 按钮，将返回到编辑状态。",
                'description' => '预览投稿并选择频道提示语',
                'created_at' => '2023-09-17 08:48:16',
                'updated_at' => '2023-09-17 08:48:41',
            ],
            [
                'id' => 16,
                'group' => 'submission',
                'name' => 'select_channel',
                'value' => "请选择您需要发布的频道",
                'description' => '选择频道提示语',
                'created_at' => '2023-09-17 08:48:16',
                'updated_at' => '2023-09-17 08:48:41',
            ],
            [
                'id' => 17,
                'group' => 'submission',
                'name' => 'select_channel_end',
                'value' => "您已选择频道，请点击下方的 “确认投稿” 按钮，或者点击下方的 “重新选择频道” 按钮。",
                'description' => '选择频道后的提示语',
                'created_at' => '2023-09-17 08:48:16',
                'updated_at' => '2023-09-17 08:48:41',
            ],
            [
                'id' => 18,
                'group' => 'help',
                'name' => 'start',
                'value' => "这里是帮助中心",
                'description' => '帮助中心内容',
                'created_at' => '2023-09-17 08:48:16',
                'updated_at' => '2023-09-17 08:48:41',
            ],
            [
                'id' => 19,
                'group' => 'feedback',
                'name' => 'start',
                'value' => "这里是意见反馈\r\n请选择您是要投诉还是建议反馈",
                'description' => '意见反馈开始提示语',
                'created_at' => '2023-09-17 08:48:16',
                'updated_at' => '2023-09-17 08:48:41',
            ],
            [
                'id' => 20,
                'group' => 'feedback',
                'name' => 'start_complaint',
                'value' => "请向这里转发您想要投诉的频道消息\r\n请注意，您必须转发您要投诉的频道消息过来，其他方式无效。",
                'description' => '开始投诉提示语',
                'created_at' => '2023-09-17 08:48:16',
                'updated_at' => '2023-09-17 08:48:41',
            ],
        ];
        //        DB::table('config')->insert($data);
        foreach ($data as $item) {
            (new Config())->firstOrCreate(['id' => $item['id']], $item);
        }
    }
}

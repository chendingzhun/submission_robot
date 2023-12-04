<?php

namespace App\Admin\Forms\ReviewGroup;

use App\Models\Auditor;
use App\Models\ReviewGroupAuditor;
use Dcat\Admin\Contracts\LazyRenderable;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\Form;

class AuditorForm extends Form implements LazyRenderable
{
    use LazyWidget; // 使用异步加载功能

    // 处理请求
    public function handle(array $input)
    {
        $model = new ReviewGroupAuditor();
        $auditor_id = $input['auditor_id'];
        $review_group_id = $input['review_group_id'];
        $id = json_decode($input['id'], true);

        $sqlData = [];

        foreach ($id as $key => $auditorId) {
            if (! in_array($auditorId, $auditor_id)) {
                $model->destroy($key);
            } else {
                if (in_array($auditorId, $auditor_id)) {
                    continue;
                }
                $sqlData[] = [
                    'review_group_id' => $review_group_id,
                    'auditor_id' => $auditorId,
                ];
            }
        }

        if (! empty($id) && empty($sqlData)) {
            return $this->response()->success('操作成功')->refresh();
        }

        if (empty($id) && empty($sqlData)) {
            foreach ($auditor_id as $auditorId) {
                $sqlData[] = [
                    'review_group_id' => $review_group_id,
                    'auditor_id' => $auditorId,
                ];
            }
        }

        if (empty($sqlData)) {
            return $this->response()->success('操作成功')->refresh();
        }

        if ($model->insert($sqlData)) {
            return $this->response()->success('操作成功')->refresh();
        }

        return $this->response()->error('操作失败');
    }

    public function form()
    {
        // 获取外部传递参数
        $review_group_id = $this->payload['review_group_id'] ?? null;

        $auditorAll = Auditor::all()->pluck('name', 'id')->toArray();

        $reviewGroupAuditor = ReviewGroupAuditor::where('review_group_id', $review_group_id)->pluck('auditor_id', 'id')->toArray();

        $this->checkbox('auditor_id', '审核员')
            ->options($auditorAll)
            ->default(array_values($reviewGroupAuditor));

        $this->hidden('review_group_id')->default($review_group_id);
        $this->hidden('id')->default(json_encode($reviewGroupAuditor));
    }

    // 返回表单数据，如不需要可以删除此方法
    public function default()
    {
        return [
            'auditor_id' => '',
            'id' => '',
        ];
    }
}

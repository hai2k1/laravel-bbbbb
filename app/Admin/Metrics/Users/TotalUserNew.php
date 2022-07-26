<?php

namespace App\Admin\Metrics\Users;

use Carbon\Carbon;
use Dcat\Admin\Models\Administrator;
use Dcat\Admin\Widgets\Metrics\Card;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class TotalUserNew extends Card
{
    /**
     * 卡片底部内容.
     *
     * @var string|Renderable|\Closure
     */
    protected $footer;

    /**
     * 处理请求.
     *
     * @param Request $request
     *
     * @return void
     */
    public function handle(Request $request)
    {
        switch ($request->get('option')) {
            case 'all':
                $this->content(Administrator::count());
                break;
            case '365':
                $this->content(Administrator::whereBetween('created_at',
                    [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()]
                )->count());
                break;
            case '30':
                $this->content(Administrator::whereBetween('created_at',
                    [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]
                )->count());
                break;
            case '7':
                $this->content(Administrator::whereBetween('created_at',
                    [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
                )->count());
                break;
            case '1':
            default:
                $today = Administrator::whereDate('created_at', Carbon::now()->toDateString())->count();
                $this->content($today);
        }
    }

    /**
     * @param int $percent
     *
     * @return $this
     */
    public function down($percent)
    {
        return $this->footer(
            "<i class=\"feather icon-trending-down text-danger\"></i> {$percent}% Decrease"
        );
    }

    /**
     * 设置卡片底部内容.
     *
     * @param string|Renderable|\Closure $footer
     *
     * @return $this
     */
    public function footer($footer)
    {
        $this->footer = $footer;

        return $this;
    }

    /**
     * @param int $percent
     *
     * @return $this
     */
    public function up($percent)
    {
        return $this->footer(
            "<i class=\"feather icon-trending-up text-success\"></i> {$percent}% Increase"
        );
    }

    /**
     * 渲染卡片内容.
     *
     * @return string
     */
    public function renderContent()
    {
        $content = parent::renderContent();

        return <<<HTML
<div class="d-flex justify-content-between align-items-center mt-1" style="margin-bottom: 2px">
    <h2 class="ml-1 font-lg-1">{$content}</h2>
</div>
<div class="ml-1 mt-1 font-weight-bold text-80">
    {$this->renderFooter()}
</div>
HTML;
    }

    /**
     * 渲染卡片底部内容.
     *
     * @return string
     */
    public function renderFooter()
    {
        return $this->toString($this->footer);
    }

    /**
     * 初始化卡片.
     */
    protected function init()
    {
        parent::init();

        $this->title('Người dùng mới');
        $this->dropdown([
            '1' => 'Hôm nay',
            '7' => 'Trong tuần này',
            '30' => 'Trong tháng',
            '365' => 'Trong năm',
            'all'=> 'Tất cả'
        ]);
    }
}

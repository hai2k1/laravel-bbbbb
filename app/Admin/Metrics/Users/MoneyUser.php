<?php

namespace App\Admin\Metrics\Users;

use Carbon\Carbon;
use Dcat\Admin\Models\Administrator;
use Dcat\Admin\Widgets\Metrics\Line;
use Illuminate\Http\Request;

class MoneyUser extends Line
{
    /**
     * 处理请求
     *
     * @param Request $request
     *
     * @return mixed|void
     */
    public function handle(Request $request)
    {
        $generator = function ($len, $min = 10, $max = 300) {
            for ($i = 0; $i <= $len; $i++) {
                yield mt_rand($min, $max);
            }
        };

        $data = function ($status) {
            $charts = [];
            $result = [];
            if ($status == 'week') {
                $result = Administrator::whereBetween('updated_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                $data = Administrator::selectRaw('DAYNAME(updated_at) as day, SUM(money) as money')->groupBy('day')->whereBetween('updated_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
                $charts = $data;
            }
            if ($status == 'month') {
                $result = Administrator::whereBetween('updated_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]);
                $data = Administrator::selectRaw('DAYNAME(updated_at) as day, SUM(money) as money')->groupBy('day')
                    ->whereBetween('updated_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]);
                $charts = $data;
            }
            if ($status == 'year') {
                $result = Administrator::whereBetween('updated_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()]);
                $data = Administrator::selectRaw('MONTHNAME(updated_at) as month, SUM(money) as money')->groupBy('month')
                    ->whereBetween('updated_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->get();
                $charts = $data;
            }
            if($status == 'all') {
                $result = Administrator::whereBetween('updated_at', [new Carbon('first day of January 2018'), Carbon::now()->endOfYear()]);
                $data = Administrator::selectRaw('MONTHNAME(updated_at) as month, SUM(money) as money')->groupBy('month')->get();
                $charts = $data;
            }
            yield [
                'money' => $result->sum('money'),
                'charts' => $charts,
            ];
        };
        switch ($request->get('option')) {
            case '365':
                $data = collect($data('year'));
                $charts = [];
                foreach ($data as $value) {
                    $this->withContent($value['money']);
                    foreach ($value['charts'] as $chart) {
                        $charts[] = $chart['money'];
                    }
                }
                $this->withChart($charts);
                break;
            case '30':
                $data = collect($data('week'));
                $charts = [];
                foreach ($data as $value) {
                    $this->withContent($value['money']);
                    foreach ($value['charts'] as $chart) {
                        $charts[] = $chart['money'];
                    }
                }
                $this->withChart($charts);
                break;
            case '7':
            default:
                $data = collect($data('week'));
                $charts = [];
                foreach ($data as $value) {
                    $this->withContent($value['money']);
                    foreach ($value['charts'] as $chart) {
                        $charts[] = $chart['money'];
                    }
                }
                $this->withChart($charts);
        }
    }

    /**
     * 设置卡片内容.
     *
     * @param string $content
     *
     * @return $this
     */
    public function withContent($content)
    {
        $money = number_format($content);
        return $this->content(
            <<<HTML
<div class="d-flex justify-content-between align-items-center mt-1" style="margin-bottom: 2px">
    <h2 class="ml-1 font-lg-1">{$money} vnđ</h2>
    <span class="mb-0 mr-1 text-80">{$this->title}</span>
</div>
HTML
        );
    }

    /**
     * 设置图表数据.
     *
     * @param array $data
     *
     * @return $this
     */
    public function withChart(array $data)
    {
        return $this->chart([
            'series' => [
                [
                    'name' => $this->title,
                    'data' => $data,
                ],
            ],
        ]);
    }

    /**
     * 初始化卡片内容
     *
     * @return void
     */
    protected function init()
    {
        parent::init();

        $this->title('Tổng tiền người dùng');
        $this->dropdown([
            '7' => '7 ngày',
            '30' => '1 tháng',
            '365' => '1 năm',
            'all' => 'tổng tất cả',
        ]);
    }

}

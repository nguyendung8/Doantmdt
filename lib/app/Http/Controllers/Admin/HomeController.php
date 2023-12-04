<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VpCategory;
use App\Models\VpComment;
use App\Models\VpCustomerCare;
use App\Models\VpOrder;
use App\Models\VpProduct;
use App\Models\VpUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getHome()
    {
        $product_cnt = count( VpProduct::all());
        $comment_cnt = count( VpComment::all());
        $user_cnt = count( VpUser::Where('level', 2)->get());
        $category_cnt = count( VpCategory::all());
        $question_cnt = count( VpCustomerCare::all());
        $order_cnt = count( VpOrder::all());

        // Lấy ra doanh thu tháng hiện tại
        $revenue_current = VpOrder::select(
            DB::raw('MONTH(placed_order_date) as month'),
            DB::raw('YEAR(placed_order_date) as year'),
            DB::raw('SUM(total_price) as total_revenue_current')
        )
        ->groupBy(DB::raw('YEAR(placed_order_date)'), DB::raw('MONTH(placed_order_date)'))
        ->whereYear('placed_order_date', date('Y'))
        ->whereMonth('placed_order_date', date('m'))
        ->first();

        // Lấy ra doanh thu tất cả các tháng
        $revenue = VpOrder::select(
            DB::raw('MONTH(placed_order_date) as month'),
            DB::raw('YEAR(placed_order_date) as year'),
            DB::raw('SUM(total_price) as total_revenue')
        )
        ->groupBy(DB::raw('YEAR(placed_order_date)'), DB::raw('MONTH(placed_order_date)'))
        ->orderByDesc('year')
        ->orderByDesc('month')
        ->get();
        return view('backend.index', compact('product_cnt', 'comment_cnt', 'user_cnt', 'category_cnt', 'question_cnt', 'order_cnt', 'revenue', 'revenue_current'));
    }
    public function getLogout()
    {
        Auth::logout();

        return redirect()->intended('/');
    }
}

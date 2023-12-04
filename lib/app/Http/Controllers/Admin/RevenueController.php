<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VpOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevenueController extends Controller
{
    public function getRevenue()
    {
        // $revenue = VpOrder::sum('total_price');
        $revenue = VpOrder::select(
            DB::raw('MONTH(placed_order_date) as month'),
            DB::raw('YEAR(placed_order_date) as year'),
            DB::raw('SUM(total_price) as total_revenue')
        )
        ->groupBy(DB::raw('YEAR(placed_order_date)'), DB::raw('MONTH(placed_order_date)'))
        ->orderByDesc('year')
        ->orderByDesc('month')
        ->get();
        return view('backend.revenue', compact('revenue'));
    }
}

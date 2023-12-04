@extends('backend.master')
@section('title', 'Tổng doanh thu')
@section('main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .comment-item {
        border: 1px solid #337AB7;
        padding: 11px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15) !important;
        margin-bottom: 10px;
        border-radius: 4px;
    }
    table {
        border-radius: 4px;
    }
    th, td {
        padding: 6px 38px;
        text-align: center;
    }
</style>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Doanh thu</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Thống kê doanh thu
                    </div>
                    <div style="font-size: 25px" class="panel-body">
                        {{-- {{ number_format($revenue->total_price,0,',','.')}}.000.000 VND --}}
                         <table border="1">
                            <thead>
                                <tr>
                                    <th>Năm</th>
                                    <th>Tháng</th>
                                    <th>Tổng doanh thu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($revenue as $row)
                                    <tr>
                                        <td>{{ $row->year }}</td>
                                        <td>{{ $row->month }}</td>
                                        <td>{{number_format($row->total_revenue ,0,',','.')}}.000.000 VND </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>
		</div>
	</div>
@stop

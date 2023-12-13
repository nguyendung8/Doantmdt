@extends('backend.master')
@section('title', 'Trang chủ')
@section('main')
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
        position: relative;
    }
    th, td {
        padding: 6px 38px;
        text-align: center;
    }
    .view_reveune {
        background: #337ab7;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 3px 10px;
        margin-bottom: 15px;
		cursor: pointer;
    }
    .close-btn {
        position: absolute;
        right: 8px;
        top: 2px;
		cursor: pointer;
    }
    .remove {
        display: none;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trang chủ</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $product_cnt }}</div>
							<div class="text-muted">Sản phẩm</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $question_cnt }}</div>
							<div class="text-muted">Tin nhắn</div>
						</div>
					</div>
				</div>
			</div>
            <div class="col-xs-12 col-md-6 col-lg-3">
				<div  style="background: #3552ae; color: #fff;" class="panel panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<i style="font-size: 55px; margin-left: 5px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $comment_cnt }}</div>
							<div class="text-muted">Bình luận</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<i style="font-size: 45px;" class="fa fa-users" aria-hidden="true"></i>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $user_cnt }}</div>
							<div class="text-muted">Người dùng</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $category_cnt }}</div>
							<div class="text-muted">Danh mục</div>
						</div>
					</div>
				</div>
			</div>
            <div class="col-xs-12 col-md-6 col-lg-3">
				<div style="background: #35ae39; color: #fff;" class="panel panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<i style="font-size: 47px; margin-right: 7px;" class="fa fa-cart-plus" aria-hidden="true"></i>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $order_cnt }}</div>
							<div class="text-muted">Đơn hàng</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>

    <script>
        let open = document.querySelector('.view_reveune');
        let table = document.querySelector('.table');
        let close = document.querySelector('.close-btn');

        open.addEventListener('click', function() {
            table.classList.remove('remove');
        });
        close.addEventListener('click', function() {
            table.classList.add('remove');
        });
    </script>
@stop

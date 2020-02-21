@extends('frontend.layouts.master', ['bannerinfo' => false, 'bannerbottom' => false])

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon' => 'fa fa-user', 'title' => '會員資料', 'home' => false, 'description' => 'User Profile'])
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row mb-4"></div>
    <div class="row text-center">
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <i class="fa fa-id-card-o fa-5x mb-3"></i>
                    <h4>基本資料</h4>
                    <h5>Information</h5>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <i class="fa fa-th fa-5x mb-3"></i>
                    <h4>商品設定</h4>
                    <h5>Products</h5>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <i class="fa fa-truck fa-5x mb-3"></i>
                    <h4>出貨管理</h4>
                    <h4>Shipping</h4>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <i class="fa fa-list-alt fa-5x mb-3"></i>
                    <h4>訂單查詢</h4>
                    <h4>Orders</h4>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
        $( ".card" ).hover(
            function() {
                $(this).addClass('shadow-lg').css('cursor', 'pointer'); 
            }, function() {
                $(this).removeClass('shadow-lg');
            }
        );
	});
</script>
@endsection

@extends('frontend.layouts.master', ['bannerinfo' => false, 'bannerbottom' => false])

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon' => 'fa fa-th', 'title' => '商品設定', 'home' => false, 'description' => 'Product'])
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h6 class="card-header text-center">若您欲修改資料，請點選下方的修改按鈕。</h6>
                <h6 class="card-header text-center">If you want to modify the information, please click the edit button below.</h6>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('姓名 Name') }}</label>
                        <div class="col-md-6">
                            <div class="form-control">{{ $user->name }}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('電話 Phone') }}</label>
                        <div class="col-md-6">
                            <div class="form-control">{{ $user->phone }}</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('地址 Address') }}</label>
                        <div class="col-md-6">
                            <div class="form-control">{{ $user->address }}</div>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{ route('user.profile.edit', $user->id) }}" class="btn btn-primary">修改 EDIT</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

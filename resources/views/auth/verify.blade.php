@extends('frontend.layouts.master', ['bannerinfo' => false, 'bannerbottom' => false])

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon' => 'fa fa-shield', 'title' => '驗證您的電子郵件地址 Verify Your Email Address', 'home' => false, 'type' => ''])
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h6 class="card-header">{{ __('在繼續之前，請檢查您的電子郵件以獲取驗證連結。') }}</h6>
                <h6 class="card-header">{{ __('Before proceeding, please check your email for a verification link.') }}</h6>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('如果您沒有收到電子郵件') }}，
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('點擊此處重新發送。') }}
                            {{ __('click here to request another.') }}</button>
                    </form>
                </div>

                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

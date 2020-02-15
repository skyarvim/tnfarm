@extends('frontend.layouts.master', ['bannerinfo' => false, 'bannerbottom' => false])

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon' => 'fa fa-key', 'title' => '重置密碼 Reset Password', 'type' => ''])
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('請輸入電子郵件地址後送出密碼重置連結。') }}</div>
                <div class="card-header">{{ __('Please enter your email address and send password reset link.') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('電子郵件地址 E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('送出密碼重置連結 Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

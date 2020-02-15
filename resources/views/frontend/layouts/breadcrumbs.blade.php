<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="w3layouts_breadcrumbs_left">
                    <ul>
                        @if( $home == true )
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">首頁 Home</a><span>/</span></li>
                        @endif
                        <li><i class="{{ $icon }}" aria-hidden="true"></i>{{ $title }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-auto ml-auto">
                <div class="w3layouts_breadcrumbs_right">
                    <ul>
                        @guest
                        @if( $type == 'Login' )
                        <li><i class="fa fa-registered" aria-hidden="true"></i><a href="{{ route('register') }}">註冊 Register</a></li>
                        @endif
                        @if( $type == 'Register' )
                        <li><i class="fa fa-sign-in" aria-hidden="true"></i><a href="{{ route('login') }}">登入 Login</a></li>
                        @endif
                        @endguest
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //breadcrumbs -->

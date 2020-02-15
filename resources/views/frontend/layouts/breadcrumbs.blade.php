<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="w3layouts_breadcrumbs_left">
            <ul>
                @if( $home == true )
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">首頁 Home</a><span>/</span></li>
                @endif
                <li><i class="{{ $icon }}" aria-hidden="true"></i>{{ $title }}</li>
            </ul>
        </div>
        <div class="w3layouts_breadcrumbs_right">
            <ul>
                @guest
                @if( $description != 'Login' && $description != 'Register' )
                {{ $description }}
                @else
                @if( $description == 'Login' )
                <li><i class="fa fa-registered" aria-hidden="true"></i><a href="{{ route('register') }}">註冊 Register</a></li>
                @endif
                @if( $description == 'Register' )
                <li><i class="fa fa-sign-in" aria-hidden="true"></i><a href="{{ route('login') }}">登入 Login</a></li>
                @endif
                @endif
                @endguest
            </ul>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //breadcrumbs -->

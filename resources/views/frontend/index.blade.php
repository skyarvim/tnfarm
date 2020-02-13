@extends('frontend.layouts.master', ['bannerinfo' => true, 'bannerbottom' => true])

@section('menu_home', 'active')

@section('content')
@include('frontend.layouts.welcome')
@endsection

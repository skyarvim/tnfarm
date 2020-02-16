@extends('frontend.layouts.master', ['bannerinfo' => false, 'bannerbottom' => false])

@section('menu_about', 'active')

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon' => 'fa fa-info-circle', 'title' => "About", 'home' => false, 'description' => "About Us"])
@endsection

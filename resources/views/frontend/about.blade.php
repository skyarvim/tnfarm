@extends('frontend.layouts.master', ['bannerinfo'=> false, 'bannerbottom'=> false])

@section('menu_about', 'active')

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon'=> 'fa fa-info-circle', 'title'=> "About", 'description'=> "About Us"])
@include('frontend.layouts.about')
@include('frontend.layouts.about-bottom')
@include('frontend.layouts.team')
@endsection

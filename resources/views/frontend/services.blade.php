@extends('frontend.layouts.master', ['bannerinfo'=> false, 'bannerbottom'=> false])

@section('menu_services', 'active')

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon'=> "fa fa-cogs", 'title'=> "Services", 'description'=> "Services"])
@include('frontend.layouts.services')
@include('frontend.layouts.services-bottom')
@include('frontend.layouts.testimonials')
@endsection

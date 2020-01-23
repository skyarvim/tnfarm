@extends('frontend.layouts.master', ['bannerinfo'=> false, 'bannerbottom'=> false])

@section('menu_gallery', 'active')

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon'=> "fa fa-picture-o", 'title'=> "Gallery", 'description'=> "Gallery"])
@include('frontend.layouts.gallery')
@endsection

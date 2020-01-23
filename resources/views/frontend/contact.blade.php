@extends('frontend.layouts.master', ['bannerinfo'=> false, 'bannerbottom'=> false])

@section('menu_contact', 'active')

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon'=> "fa fa-envelope-o", 'title'=> "Contact", 'description'=> "Contact Us"])
@include('frontend.layouts.contact')
@endsection

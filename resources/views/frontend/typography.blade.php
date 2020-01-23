@extends('frontend.layouts.master', ['bannerinfo'=> false, 'bannerbottom'=> false])

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon'=> "glyphicon glyphicon-text-size", 'title'=> "Typography", 'description'=> "Typography"])
@include('frontend.layouts.typography')
@endsection

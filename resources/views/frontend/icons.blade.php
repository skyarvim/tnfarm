@extends('frontend.layouts.master', ['bannerinfo'=> false, 'bannerbottom'=> false])

@section('content')
@include('frontend.layouts.breadcrumbs', ['icon'=> "fa fa-globe", 'title'=> "Web Icons", 'description'=> "Web Icons"])
@include('frontend.layouts.icons')
@endsection

@extends('backend.layouts.master') 
@section('title', 'User Edit') 
@section('content')
<div class="container">
    <section class="page-section my-5 p-5">
        <form method="POST" action="{{ route('admin.user.update',  $user->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="active">ACTIVE</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="active" value="{{ $user->active }}">
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </div>
        </form>
    </section>
</div>
@endsection

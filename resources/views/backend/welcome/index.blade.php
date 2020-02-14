@extends('backend.layouts.master') 
@section('title', 'Welcome List') 
@section('content')
<div class="container">
    <section class="page-section my-5 p-5">
        <div class="row">
            <div class="col-sm-1">
                <a href="{{ route('admin.welcome.create') }}" class="btn btn-primary">ADD</a>
            </div>
        </div>
        <div class="row">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col">OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($welcomes as $welcome)
                    <tr>
                        <th class="align-middle" scope="row">{{ $welcome->id }}</th>
                        <td class="align-middle">{{ $welcome->title }}</td>
                        <td class="align-middle"><img src="https://gcs.tnfarm.tw/welcome/{{ $welcome->image }}" width="100px"></td>
                        <td class="align-middle">
                            <a href="{{ route('admin.welcome.edit', $welcome->id) }}" class="btn btn-primary">EDIT</a>
                            <form method="POST" action="{{ route('admin.welcome.destroy', $welcome->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-secondary">DELETE</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>No Welcome</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection

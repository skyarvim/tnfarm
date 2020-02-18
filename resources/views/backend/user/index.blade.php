@extends('backend.layouts.master') 
@section('title', 'User List') 
@section('content')
<div class="container">
    <section class="page-section my-5 p-5">
        <div class="row">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAME</th>
                        <th scope="col">PHONE</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">EMAIL_VERIFIED_AT</th>
                        <th scope="col">CREATED_AT</th>
                        <th scope="col">UPDATED_AT</th>
                        <th scope="col">OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <th class="align-middle" scope="row">{{ $user->id }}</th>
                        <td class="align-middle">{{ $user->name }}</td>
                        <td class="align-middle">{{ $user->phone }}</td>
                        <td class="align-middle">{{ $user->address }}</td>
                        <td class="align-middle">{{ $user->email }}</td>
                        <td class="align-middle">{{ $user->email_verified_at }}</td>
                        <td class="align-middle">{{ $user->created_at }}</td>
                        <td class="align-middle">{{ $user->updated_at }}</td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>No User</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection

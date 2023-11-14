@extends('layout.base')

@section('title')
    <title>Home | User List</title>
@endsection

@section('main-content')
    <div class="container">
        <div id="img-div-postion">
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 shadow p-4">
                <h4 class="mb-3 h4-color">Users List</h4>
                <table class="table table-striped mb-0">
                    <thead class="table-success">
                      <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Profile Picture</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (count($user_list) > 0)
                            @foreach ($user_list as $user)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->mobile }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <img src="{{ asset($user->photo) }}" class="" width="60" height="60" alt="" onmouseover="showImage(this)" onmouseout="hideImage(this)">
                                </td>
                                <td>
                                    <a href="{{ route('user_edit', ['id'=>$user->id]) }}" class="btn btn-dark btn-sm px-4">Edit</a>
                                    <a href="{{ route('delete_user', ['id'=>$user->id]) }}" class="btn btn-danger btn-sm px-3">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr><td colspan="6">No Record!</td></tr>
                        @endif
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
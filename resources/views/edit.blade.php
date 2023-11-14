@extends('layout.base')

@section('title')
    <title>Home | Update User</title>
@endsection

@section('main-content')
  <div class="container mb-4">
    <div class="row">
      <div class="col-sm-12 col-md-12 bg-secondary-50 shadow p-4">
        <h4 class="mx-5 mb-3 h4-color">Update User Record</h4>
        <form action="{{ route('update_user', ['id'=>$user->id]) }}" method="POST" class="px-5" enctype="multipart/form-data" novalidate>
          @csrf
          <div class="mb-3">
            <label for="id_name">Full Name:</label>
            <input type="text" name="name" value="{{ old('name')?old('name'):$user->name }}" class="form-control mt-1" id="id_name">
            @error('name')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="id_mobile">Mobile Number:</label>
            <input type="number" name="mobile" value="{{ old('mobile')?old('mobile'):$user->mobile }}"  class="form-control mt-1" id="id_mobile">
            @error('mobile')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="id_email">Email:</label>
            <input type="email" name="email" value="{{ old('email')?old('email'):$user->email }}"  class="form-control mt-1" id="id_email">
            @error('email')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="id_photo">Upoad Image:</label>
            <input type="file" name="photo" class="form-control mt-1" id="id_photo">
            @error('photo')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-primary px-4 mt-2">Update Record</button>
        </form>
      </div>
    </div>
  </div>
@endsection
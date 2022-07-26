@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
  <form class="container-fluid" method="post" action="{{ route('admin.user.store') }}">
  @csrf
    <div class="row">
      <div class="d-flex justify-content-between">
        <h3> Create a user </h3>
        <a href="{{ route('admin.user.index') }}" class="btn btn-primary">
          Back
        </a>
      </div>
    </div>
    <div class="">
      <label for="name" class="form-label"> Name </label>
      <input name="name" type="text" class="form-control" id="name" placeholder="">
      @error('name')
      <span class="text-danger text-left">{{ $message }}</span>
      @enderror
    </div>
    <div class="">
      <label for="email" class="form-label">Email address</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="">
      @error('email')
      <span class="text-danger text-left">{{ $message }}</span>
      @enderror
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="">
        @error('password')
        <span class="text-danger text-left">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6">
        <label for="password_confirmation" class="form-label">Password Confirm</label>
        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="">
      </div>
    </div>
    <div class="">
      <label for="address" class="form-label">Address</label>
      <input name="address" type="text" class="form-control" id="address" placeholder="">
    </div>
    @error('address')
      <span class="text-danger text-left">{{ $message }}</span>
    @enderror
    <div class="">
      <label for="phone" class="form-label">Phone Number</label>
      <input name="phone" type="text" class="form-control" id="phone" placeholder="">
    </div>
    @error('phone')
      <span class="text-danger text-left">{{ $message }}</span>
    @enderror
    <div class="">
      <label for="fblink" class="form-label">Facebook Link</label>
      <input name="fblink" type="text" class="form-control" id="fblink" placeholder="https://example.com">
      @error('fblink')
      <span class="text-danger text-left">{{ $message }}</span>
      @enderror
    </div>
    <div class="">
      <label for="ytlink" class="form-label">Youtube</label>
      <input name="ytlink" type="text" class="form-control" id="ytlink" placeholder="https://example.com">
      @error('ytlink')
      <span class="text-danger text-left">{{ $message }}</span>
      @enderror
    </div>
    <div class="">
      <label for="desc" class="form-label">Description</label>
      <textarea name="desc" type="text" class="form-control" id="desc" placeholder=""> </textarea>
    </div>
    <br>
    <div class="row">
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">
          Save
        </button>
        <button class="btn btn-secondary">
          Reset
        </button>
      </div>
    </div>
  </form>
</div>
</div>
@endsection

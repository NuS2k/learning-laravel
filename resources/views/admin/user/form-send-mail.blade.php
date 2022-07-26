@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
    <div class="col-md-12">
    <h2 class="float-start">Send Email to User </h2>
    <a href="{{ route('admin.user.index') }}" class="btn btn-primary float-end">Back</a>
</div>
<br>
<form method="post" action="{{ route('admin.user.send') }}" enctype="multipart/form-data">
    @csrf
    <select class="form-control" name="mail">
      <option value="all">Select a user</option>
      @if(!empty($users))
        @foreach($users as $user)
        <option value="{{ $user['email'] }}">{{ $user['name'] }}</option>
        @endforeach
      @endif
    </select>
    <br>
    <div class="mb-3">
      <input class="form-control" type="file" id="attachment" name="attachment">
    </div>
    <div class="d-flex justify-content-center">
      <div>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </div>
  </form>

@endsection
@extends('layouts.admin.master')

@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
<div class="container-fluid">
  <div class="d-flex justify-content-between" >
    <h2 style="font-weight:bold; ">User List</h2>
    <div>
      <a href="{{ route('admin.user.form-send-email') }}" class="btn btn-outline-dark">Send mail</a>
      <a href="{{ route('admin.user.create') }}" class="btn btn-primary">+ Add new</a>   
    </div>
  </div>
    <div class="table-responsive" >
      <table class="table table-hover table-light">
          <tr>
              <th> Avatar </th>
              <th> Name </th>
              <th> Email </th>
              <th> Action </th>
          </tr>
          @if(!empty($users))
          @foreach($users as $user)
          <tr>
              <td> <i class="fa-solid fa-square-user"></i> </td>
              <td> {{ $user['name'] }} </td>
              <td> {{ $user['email'] }} </td>
              <td>
                  <button class="btn btn-primary"> Edit </button>
                  <button class="btn btn-danger"> Delete </button>
              </td>
          </tr>
          @endforeach
          @endif
    </table>
  </div>
  <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>
  </div>
</div>
    
@endsection

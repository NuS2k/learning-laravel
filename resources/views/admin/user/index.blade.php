@extends('layouts.admin.master')

@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
<div class="container-fluid">
  <div class="d-flex justify-content-between" >
    <h2 style="font-weight:bold; ">User List</h2>
    <div>
      <a href="" class="btn btn-outline-dark">Send mail</a>   
      <a href="" class="btn btn-primary">+ Add new</a>
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
          <tr>
              <th><i class="fa-regular fa-user"></i></th>
              <td>Hoàng A Dậu</td>
              <td>hoangadieu123@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
              <th ><i class="fa-regular fa-user"></i></th>
              <td>Phạm Kì Khôi</td>
              <td>phamkikhoi123@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
              <th ><i class="fa-regular fa-user"></i></th>
              <td>Ngô Thái Dương</td>
              <td>thaiduongvietliekhongdau@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
              <th ><i class="fa-regular fa-user"></i></th>
              <td>Phạm Ngọc Long</td>
              <td>Longpndzprovip@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
              <th ><i class="fa-regular fa-user"></i></th>
              <td>Finn Anderson</td>
              <td>Karrigancsgo@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
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

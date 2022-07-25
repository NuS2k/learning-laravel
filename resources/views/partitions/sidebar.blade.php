<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-4 mb-4">
          <div class="sidenav">
            <ul class="list-unstyled"> System 
              <a href="/admin/user" class="list-group-item list-group-item-action">User management</a>
              <a href="/admin/role" class="list-group-item">Role management</a>
              <a href="/admin/permission" class="list-group-item">Permission management</a>        
            </ul>
            <ul class="list-unstyled">  Catalog
              <a href="/admin/product" class="list-group-item">Product management</a>
              <a href="/admin/category" class="list-group-item">Category management</a>
            </ul>
          </div>
        </div>     
      @yield('content')
    </div>
  </div>
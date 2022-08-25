<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-4 mb-4">
          <div class="sidenav">
            <ul class="list-unstyled"> System
              <a href="{{ route('admin.user.index') }}" class="list-group-item list-group-item-action">User management</a>
              <a href="{{ route('admin.role.index') }}" class="list-group-item">Role management</a>
              <a href="{{ route('admin.permission.index') }}" class="list-group-item">Permission management</a>
              <a href="{{ route('admin.permission-group.index') }}" class="list-group-item">Permission group management</a>
              <a href="{{ route('admin.customer.index') }}" class="list-group-item">Customer Management </a>
            </ul>
            <ul class="list-unstyled">  Catalog
              <a href="{{ route('admin.product.index') }}" class="list-group-item">Product management</a>
              <a href="{{ route('admin.category.index') }}" class="list-group-item">Category management</a>
            </ul>
          </div>
        </div>
      @yield('content')
    </div>
  </div>

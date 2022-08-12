@extends('layouts.admin.master')

@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
    <div class="container-fluid">
      <div class="d-flex justify-content-between">
        <h4 style="font-weight: bold;"> Showing Permission Group: </h4>
        <div>
          <a href="{{ route('admin.permission-group.index') }}" class="btn btn-primary">Back</a>
        </div>
      </div>
      @if(!empty($permissionGroup))
        <div class="container-fluid">
          <h5>
            ID: {{ $permissionGroup->id }}
          </h5>
          <h5>
            Name: {{ $permissionGroup->name }}
          </h5>
          <h5>
            Created at: {{ $permissionGroup->created_at }}
          </h5>
          <h5>
            Updated at: {{ $permissionGroup->updated_at }}
          </h5>
        </div>
        <div class="row mt-3">
          <div class="d-flex justify-content-center">
            <div>
              <a href="{{ route('admin.permission-group.edit', $permissionGroup->id) }}" class="btn btn-primary"> Edit </a>
            </div>
            <div>
              <form class="d-inline" method="post" action="{{ route('admin.permission-group.destroy', $permissionGroup->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Delete </button>
              </form>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>

@endsection
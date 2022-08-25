@extends('layouts.admin.master')

@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
    <div class="container-fluid">
      <div class="d-flex justify-content-between">
        <h4 style="font-weight: bold;">Permission Group List</h4>
        <div>
          <a href="{{ route('admin.permission-group.create') }}" class="btn btn-primary">Create</a>
        </div>
      </div>
      <br>
      <div class="table-responsive">
        <table class="table table-hover table-light">
            <tr>
                <th> Name </th>
                <th> Action </th>
            </tr>
            @if(!empty($permissionGroups))
            @foreach($permissionGroups as $permissionGroup)
            <tr>
                <td>
                    <h5>
                        {{ $permissionGroup->name }}
                    </h5>
                </td>
                <td>
                    <a href="{{ route('admin.permission-group.show', $permissionGroup->id) }}" class="btn btn-success"> Show </a>
                    <a href="{{ route('admin.permission-group.edit', $permissionGroup->id) }}" class="btn btn-primary"> Edit </a>
                    <form class="d-inline" method="post" action="{{ route('admin.permission-group.destroy', $permissionGroup->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete </button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif

            {{ $permissionGroups->links() }}
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

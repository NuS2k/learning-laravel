@extends('layouts.admin.master')

@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <p style="font-weight: bold;">Customer List</p>
                <div>
                <a href="{{ route('admin.customer.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-light">
                    <tr>
                        <th> Customer's Type </th>
                        <th>  ID </th>
                        <th> Infor </th>
                        <th> Address </th>
                        <th> Phone </th>
                        <th> Email </th>
                        <th> Creator </th>
                        <th> Function </th>
                    </tr>
                    @if(!empty($customers))
                    @foreach($customers as $customer)
                    <tr>
                        <td>
                            <select name="" id="">
                                @foreach($customer->roles as $role)
                                    <option> {{ $role->name }} </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <p>
                                {{ $customer->mkh }}
                            </p>
                        </td>
                        <td>
                            <p>
                                {{ $customer->name }}
                            </p>
                        </td>
                        <td>
                            <p>
                                {{ $customer->address }}
                            </p>
                        </td>
                        <td>
                            <p>
                                {{ $customer->phone }}
                            </p>
                        </td>
                        <td>
                            <select name="" id="">
                            @foreach($customer->users as $user)
                            <option> {{ $user->name }} </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <a href="{{ route('admin.customer.show', $customer->id) }}" class="btn btn-success"> Show </a>
                            <a href="{{ route('admin.customer.edit', $customer->id) }}" class="btn btn-primary"> Edit </a>
                            <form class="d-inline" method="post" action="{{ route('admin.customer.destroy', $customer->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> Delete </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </table>
            </div>
        </div>
  </div>
</div>
@endsection

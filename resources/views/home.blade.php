@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{auth::user()->name}}{{ __(' are logged in!') }}

                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">List Inventory </div>
                    <form method="" action="">
                        <div class="input-group mt-2 p-2">
                            <input type="text" class="form-control"  name="keyword" value="{{ request()->get('keyword') }}" placeholder="Input Inventory Name">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>  
                        </div>
                        <a href="{{route ('inventory.create')}}" type="button" class="btn btn-success">Add inventory</a>
                    </form> 
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inventories as $key => $inventory)
                            <tr>
                                <th scope="row">{{$key +1}}</th>
                                <td>{{$inventory->name}}</td>
                                <td>{{$inventory->description}}</td>
                                <td>
                                    <a href="{{route ('inventory.edit', $inventory)}}" type="submit" name="edit" class="btn btn-warning">Edit</a>
                                    <a href="{{route ('inventory.delete', $inventory)}}" type="button" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{$inventories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

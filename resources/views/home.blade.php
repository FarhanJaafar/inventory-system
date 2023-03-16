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

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="card">
                <div class="card-header">List Inventory </div>
                
                <div class="card-body">
                <a href="{{route ('inventory.create')}}" button type="button" class="btn btn-success">Add inventori</button></a>
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
                    <td></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

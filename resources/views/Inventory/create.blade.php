@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Inventory</div>
                <div class="card-body">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form method="POST" action="{{route ('inventory.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Type Inventory</label>
                            <select class="form-control" name="inventory_type_id">
                            @foreach ($inventoryTypes as $inventoryType)
                                <option value = "{{$inventoryType->id}}">{{$inventoryType->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name Inventory</label>
                        <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Detail Inventory</label>
                        <textarea class="form-control" rows="3" name="description"></textarea>
                        <label for="exampleFormControlInput2" class="form-label">Color Inventory</label>
                        <input type="text" class="form-control" name="color">
                        <label for="exampleFormControlInput3" class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="quantity">
                    </div>
                    <a href="{{route ('home')}}" type="button" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Add</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

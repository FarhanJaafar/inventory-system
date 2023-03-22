@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Inventory</div>
                <div class="card-body">
                    <form method="POST" action="{{route ('inventory.update', $inventory)}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Jenis Inventori</label>
                            <select class="form-control" name="inventory_type_id">
                                @foreach ( $inventoryTypes as $inventoryType )
                                    <option value="{{ $inventoryType->id }}">{{ $inventoryType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="exampleFormControlInput1" class="form-label">Name Inventori</label>
                        <input type="text" class="form-control" name="name" placeholder="{{$inventory->name}}">
                        <label for="exampleFormControlTextarea1" class="form-label">Description Inventori</label>
                        <textarea class="form-control" rows="3" name="description" placeholder="{{$inventory->description}}"></textarea>
                        <label for="exampleFormControlInput1" class="form-label">Color</label>
                        <input type="text" class="form-control" name="color" placeholder="">
                        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="quantity" placeholder="">
                        <a href="{{route ('home')}}" type="button" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                        <label for="exampleFormControlInput1" class="form-label">Nama Inventori</label>
                        <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Detail Inventori</label>
                        <textarea class="form-control" rows="3" name="description"></textarea>

                        <a href="{{route ('home')}}" type="button" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
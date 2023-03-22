@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Inventory {{ $inventory->name }}</div>

                <div class="card-body">
                    {{ $inventory->name }}
                </div>


            </div>

            <div class="card mt-2">
                <div class="card-header">Stock Inventory {{ $inventory->name }}</div>

                <div class="card-body">
                    @foreach($inventoryStocks as $inventoryStock)
                    <div class="row g-3">
                        <div class="col-sm-7">
                            <input type="text" class="form-control" placeholder="{{ $inventoryStock->quantity }}" readonly disabled>
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control" placeholder="{{ $inventoryStock->color }}" readonly disabled>
                        </div>
                        <a href="{{ route('home') }}" type="button" class="btn btn-warning">Back</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

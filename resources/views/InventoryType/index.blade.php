@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-2">
                <div class="card-header">Senarai Jenis Inventori</div>

                <div class="card-body">
                    <a href="{{ route('inventorytype.create') }}" type="button" class="btn btn-dark">Tambah Inventori</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ( $inventoryTypes as $key => $inventoryType)
                            <tr>
                              <th scope="row">{{ $key+1 }}</th>
                              <td>{{ $inventoryType->name }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                        <a href="{{ route('home') }}" type="button" class="btn btn-warning">Back</a>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@extends('adminlte::page')

@section('title', 'Food Origin Add')

@section('content_header')
    <h1>Food Origin Add</h1>
@stop

@section('content')


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('foodorigin.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">Food ID</label>
                            <input type="number" class="form-control @error('food_id') is-invalid @enderror" name="food_id" value="{{ old('food_id') }}" placeholder="Masukkan ID Food">

                            <!-- error message untuk title -->
                            @error('food_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Food Origin</label>
                            <input type="text" class="form-control @error('foodOrigin') is-invalid @enderror" name="foodOrigin" value="{{ old('foodOrigin') }}" placeholder="Masukkan Asal">

                            <!-- error message untuk title -->
                            @error('foodOrigin')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Food Image Origin</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                            <!-- error message untuk title -->
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@stop

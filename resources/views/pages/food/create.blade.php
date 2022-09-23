@extends('adminlte::page')

@section('title', 'Food Add')

@section('content_header')
    <h1>Food Add</h1>
@stop

@section('content')


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Food Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                            <!-- error message untuk title -->
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Food Name</label>
                            <input type="text" class="form-control @error('foodName') is-invalid @enderror" name="foodName" value="{{ old('foodName') }}" placeholder="Masukkan ID Food">

                            <!-- error message untuk title -->
                            @error('foodName')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Masukkan Price">

                            <!-- error message untuk title -->
                            @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Rate</label>
                            <input type="text" class="form-control @error('foodRate') is-invalid @enderror" name="foodRate" value="{{ old('foodRate') }}" placeholder="Masukkan food rate">

                            <!-- error message untuk title -->
                            @error('foodRate')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Discount</label>
                            <input type="text" class="form-control @error('foodDiscount') is-invalid @enderror" name="foodDiscount" value="{{ old('foodDiscount') }}" placeholder="Masukkan food discount">

                            <!-- error message untuk title -->
                            @error('foodDiscount')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Description</label>
                            <input type="text" class="form-control @error('foodDescription') is-invalid @enderror" name="foodDescription" value="{{ old('foodDescription') }}" placeholder="Masukkan food discount">

                            <!-- error message untuk title -->
                            @error('foodDescription')
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

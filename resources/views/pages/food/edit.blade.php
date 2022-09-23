@extends('adminlte::page')

@section('foodName', 'Food Add')

@section('content_header')
    <h1>Food Create</h1>
@stop

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Food Name</label>
                                <input type="text" class="form-control @error('foodName') is-invalid @enderror" name="foodName" value="{{ old('foodName', $food->foodName) }}" placeholder="Masukkan Judul Blog">

                                <!-- error message untuk foodName -->
                                @error('foodName')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $food->price) }}" placeholder="Food Name">

                                <!-- error message untuk foodName -->
                                @error('price')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Food Rate</label>
                                <input type="text" class="form-control @error('foodRate') is-invalid @enderror" name="foodRate" value="{{ old('foodRate', $food->foodRate) }}" placeholder="Food Name">

                                <!-- error message untuk foodName -->
                                @error('foodRate')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Food Discount</label>
                                <input type="text" class="form-control @error('foodDiscount') is-invalid @enderror" name="foodDiscount" value="{{ old('foodDiscount', $food->foodDiscount) }}" placeholder="Food Discount">

                                <!-- error message untuk foodName -->
                                @error('foodDiscount')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Food Description</label>
                                <input type="text" class="form-control @error('foodDescription') is-invalid @enderror" name="foodDescription" value="{{ old('foodDescription', $food->foodDescription) }}" placeholder="Food Description">

                                <!-- error message untuk foodName -->
                                @error('foodDiscoun1t')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

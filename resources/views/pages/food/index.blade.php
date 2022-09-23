@extends('adminlte::page')

@section('title', 'Food')

@section('content_header')
    <h1>Food</h1>
@stop

@section('content')

<style>

.star {
    height: 50px;
    width: 50px;
    -webkit-clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
    clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
    text-align: center;
    background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
    color: white;
  }

  .star::before {
    display: inline-block;
    height: 100%;
    background: blue;
    vertical-align: middle;
    content: '';
  }


</style>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{route('food.create')}}" class="btn btn-md btn-success mb-3">Tambah Data</a>
                     <div style="overflow-x:auto;">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Origin</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($foods as $food)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ Storage::url('public/foods/').$food->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $food->foodName }}</td>
                                    <td>
                                        {{ Str::substr($food->price, 0,-3);  }}K
                                    </td>
                                    <td>
                                        <div class="star">{{$food->foodRate}}</div>


                                        {{-- @if ($food->foodRate >= 8)
                                        @for($i = 1; $i <= 8; $i++)
                                                <i class="fas fa-star"></i>
                                        @endfor
                                        <i class="fas fa-plus"></i>
                                        {{$food->foodRate - 8}}
                                        @else
                                            <i class="fas fa-star"></i>
                                        @endif --}}

                                    </td>
                                    <td>
                                        @foreach($food->FoodOrigins()->get() as $f)
                                        <div class="card shadow-sm mb-2">
                                            {{$f->foodOrigin}}
                                        {{-- {{ $food->image }} --}}
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>{{ $food->foodDiscount }}</td>
                                    <td>{{ $food->foodDescription }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('food.destroy', $food->id) }}" method="POST">
                                            <a href="{{ route('food.show', $food->id) }}" class="btn btn-sm btn-success"> <i class="fa fa-eye"></i></a>
                                            <a href="{{ route('food.edit', $food->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Blog belum Tersedia.
                                </div>
                            @endforelse
                            </tbody>
                        </table>
                        {{ $foods->links() }}
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>



@stop

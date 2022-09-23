@extends('adminlte::page')

@section('title', 'Food')

@section('content_header')
    <h1>Food</h1>
@stop

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{route('foodorigin.create')}}" class="btn btn-md btn-success mb-3">Tambah Data</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Food ID</th>
                            <th scope="col">Food Origin</th>
                            <th scope="col">Food Origin Image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($foodorigins as $foodorigin)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $foodorigin->food_id }}</td>
                                <td>{{ $foodorigin->foodOrigin }}</td>
                                <td class="text-center">
                                    <img src="{{ Storage::url('public/foodOrigins/').$foodorigin->image }}" class="rounded" style="width: 50px">
                                </td>
                                {{-- <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('blog.destroy', $foodorigin->id) }}" method="POST">
                                        <a href="{{ route('blog.edit', $foodorigin->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td> --}}
                            </tr>
                          @empty
                              <div class="alert alert-danger">
                                  Data Food Origin belum Tersedia.
                              </div>
                          @endforelse
                        </tbody>
                      </table>
                      {{ $foodorigins->links() }}
                </div>
            </div>
        </div>
    </div>
</div>



@stop

@extends('layouts.global')

@section('content')
    {{-- Products Photo Table --}}
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Foto Produk</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Default</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($photos as $photo)
                                        <tr>
                                            <td>{{ $photo->id }}</td>
                                            <td>{{ $photo->product->name }}</td>
                                            <td>
                                                <img src="{{ url($photo->photo) }}" alt="">
                                            </td>
                                            <td>{{ $photo->is_default ? 'Ya' : 'Tidak' }}</td>
                                            <td>
                                                <form action="{{route('products-gallery.destroy', [$photo->id])}}" method="post" class="d-inline" onsubmit="return confirm('Hapus foto produk?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Products Photo Table End--}}
@endsection
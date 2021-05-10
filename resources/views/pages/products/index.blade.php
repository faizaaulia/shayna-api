@extends('layouts.global')

@section('content')
    {{-- Products Table --}}
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Produk</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->type }}</td>
                                            <td>${{ $product->price }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td>
                                                <a href="{{route('products.gallery', [$product->id])}}" class="btn btn-sm btn-info"><i class="fa fa-picture-o"></i></a>
                                                <a href="{{route('products.edit', [$product->id])}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                                <form action="{{route('products.destroy', [$product->id])}}" method="post" class="d-inline" onsubmit="return confirm('Hapus produk?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
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
    {{-- Products Table End--}}
@endsection
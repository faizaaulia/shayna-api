@extends('layouts.global')

@section('content')
    {{-- Products Photo Table --}}
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Foto Barang <small>{{ $product->name }}</small></h4>
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
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->product->name }}</td>
                                            <td>
                                                <img src="{{ url($item->photo) }}" alt="">
                                            </td>
                                            <td>{{ $item->is_default ? 'Ya' : 'Tidak' }}</td>
                                            <td>
                                                <form action="{{route('products-gallery.destroy', [$item->id])}}" method="post" class="d-inline" onsubmit="return confirm('Hapus foto barang?')">
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
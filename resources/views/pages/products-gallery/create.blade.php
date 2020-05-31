@extends('layouts.global')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products-gallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <select name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    @error('product_id')
                        <div class="text-muted danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type" class="form-control-label">Foto Barang</label>
                    <input type="file" accept="image/*" name="photo" id="photo" value="{{ old('photo') }}" class="form-control @error('photo') is-invalid @enderror">
                    @error('photo')
                        <div class="text-muted">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="is_default" class="form-control-label">Foto Default</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('is_default') is-invalid @enderror" type="radio" name="is_default" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('is_default') is-invalid @enderror" type="radio" name="is_default" id="inlineRadio1" value="0">
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    @error('is_default')
                        <div class="text-muted">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Tambah Foto Barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection
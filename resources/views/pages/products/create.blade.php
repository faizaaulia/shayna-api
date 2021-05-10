@extends('layouts.global')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Produk</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Produk</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="text-muted danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="forom-group">
                    <label for="type" class="form-control-label">Tipe Produk</label>
                    <input type="text" name="type" id="type" value="{{ old('type') }}" class="form-control @error('type') is-invalid @enderror">
                    @error('type')
                        <div class="text-muted">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="description" class="form-control-label">Deskripsi Produk</label>
                    <textarea name="description" id="description" class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-muted">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price" class="form-control-label">Harga Produk</label>
                    <input type="number" name="price" id="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                        <div class="text-muted">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="stock" class="form-control-label">Stok Produk</label>
                    <input type="number" name="stock" id="stock" value="{{ old('stock') }}" class="form-control @error('stock') is-invalid @enderror">
                    @error('stock')
                        <div class="text-muted">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                    <button type="submit" class="btn btn-primary btn-block">Tambah Produk</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '.ckeditor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
@endpush
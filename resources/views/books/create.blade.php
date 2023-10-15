@extends('layouts.template')

@section('title', 'Add New Books')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Add New Books</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}" maxlength="13">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="halaman" class="form-label">Halaman</label>
                    <input type="number" class="form-control" id="halaman" name="halaman" value="{{ old('halaman') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori">
                        <option value="Uncategorized" {{ old('kategori') === 'ncUategorized' ? 'selected' : '' }}>Uncategorized</option>
                        <option value="Sci-Fi" {{ old('kategori') === 'Sci-Fi' ? 'selected' : '' }}>Science Fiction</option>
                        <option value="Novel" {{ old('kategori') === 'Novel' ? 'selected' : '' }}>Novel</option>
                        <option value="History" {{ old('kategori') === 'History' ? 'selected' : '' }}>History</option>
                        <option value="Biography" {{ old('kategori') === 'Biography' ? 'selected' : '' }}>Biography</option>
                        <option value="Romance" {{ old('kategori') === 'Romance' ? 'selected' : '' }}>Romance</option>
                        <option value="Education" {{ old('kategori') === 'Education' ? 'selected' : '' }}>Education</option>
                        <option value="Culinary" {{ old('kategori') === 'Culinary' ? 'selected' : '' }}>Culinary</option>
                        <option value="Comic" {{ old('kategori') === 'Comic' ? 'selected' : '' }}>Comic</option>
                    </select>
                </div>


                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ old('penerbit') }}">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection

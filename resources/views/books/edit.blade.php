@extends('layouts.template')

@section('title', 'Update Book')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Update Book</h1>
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
            <form action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $book->judul) }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="halaman" class="form-label">Halaman</label>
                    <input type="number" class="form-control" id="halaman" name="halaman" value="{{ old('halaman', $book->halaman) }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori">
                        <option value="Uncategorized" {{ $book->kategori === 'Uncategorized' ? 'selected' : '' }}>Uncategorized</option>
                        <option value="Sci-Fi" {{ $book->kategori === 'Sci-Fi' ? 'selected' : '' }}>Science Fiction</option>
                        <option value="Novel" {{ $book->kategori === 'Novel' ? 'selected' : '' }}>Novel</option>
                        <option value="History" {{ $book->kategori === 'History' ? 'selected' : '' }}>History</option>
                        <option value="Biography" {{ $book->kategori === 'Biography' ? 'selected' : '' }}>Biography</option>
                        <option value="Romance" {{ $book->kategori === 'Romance' ? 'selected' : '' }}>Romance</option>
                        <option value="Education" {{ $book->kategori === 'Education' ? 'selected' : '' }}>Education</option>
                        <option value="Culinary" {{ $book->kategori === 'Culinary' ? 'selected' : '' }}>Culinary</option>
                        <option value="Comic" {{ $book->kategori === 'Comic' ? 'selected' : '' }}>Comic</option>
                    </select>
                </div>


                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ old('penerbit', $book->penerbit) }}">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection

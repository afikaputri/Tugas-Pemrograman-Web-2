@extends('layouts.app')

@section('content')
    <h1 class="fw-bold mb-4">➕ Tambah Movie</h1>

    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <form action="/store" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul Film</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Director</label>
                    <input type="text" name="director" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Rilis</label>
                    <input type="number" name="release_year" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Genre</label>
                    <input type="text" name="genre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Rating</label>
                    <input type="number" step="0.1" name="rating" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Poster URL</label>
                    <input type="text" name="poster" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Synopsis</label>

                    <textarea name="synopsis" rows="5" class="form-control" required></textarea>
                </div>

                <button class="btn btn-dark">
                    Simpan Movie
                </button>

                <a href="/" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>
@endsection

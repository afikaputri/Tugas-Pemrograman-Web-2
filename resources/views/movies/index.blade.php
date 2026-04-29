@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="fw-bold">Movie Collection</h1>
            <p class="text-muted">
                Daftar film favorit terbaik pilihan.
            </p>
        </div>

        <a href="/create" class="btn btn-dark">
            + Tambah Film
        </a>

    </div>

    <div class="row">

        @forelse($movies as $movie)
            <div class="col-md-4 mb-4">

                <div class="card border-0 shadow-sm h-100">

                    <img src="https://via.placeholder.com/400x250" class="card-img-top">

                    <div class="card-body">

                        <div class="d-flex justify-content-between mb-2">

                            <span class="badge bg-dark">
                                {{ $movie->genre }}
                            </span>

                            <span class="text-warning fw-bold">
                                ⭐ {{ $movie->rating }}
                            </span>

                        </div>

                        <h4 class="fw-bold">
                            {{ $movie->title }}
                        </h4>

                        <p class="text-muted mb-1">
                            Director: {{ $movie->director }}
                        </p>

                        <p class="text-muted">
                            Release: {{ $movie->release_year }}
                        </p>

                        <p>
                            {{ Str::limit($movie->synopsis, 80) }}
                        </p>

                        <!-- TOMBOL EDIT -->
                        <div class="mt-3">

                            <a href="/edit/{{ $movie->id }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div class="alert alert-secondary text-center">
                    Belum ada data film.
                </div>

            </div>
        @endforelse

    </div>
@endsection

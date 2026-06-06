@extends('layouts.app')

@section('content')
    <h1 class="fw-bold mb-4">
        🗑️ Trash Movie
    </h1>

    <a href="/" class="btn btn-secondary mb-3">
        Kembali
    </a>

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Director</th>
                        <th>Duration</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($movies as $movie)
                        <tr>

                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->director }}</td>
                            <td>{{ $movie->duration }} menit</td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="4" class="text-center">
                                Trash kosong
                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

    </div>
@endsection

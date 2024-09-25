@extends('layout.main')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>DataTable</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Author</th>
                            <th>Kategori</th>
                            <th>Tahun Terbit</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $book as $b )
                        <th>{{ $b->title }}</th>
                        <th>{{ $b->author }}</th>
                        <th>{{ $b->category->name }}</th>
                        <th>{{ $b->published_year }}</th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

@endsection

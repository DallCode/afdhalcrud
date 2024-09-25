@extends('layout.main')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.css">

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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $book as $b )
                        <th>{{ $b->title }}</th>
                        <th>{{ $b->author }}</th>
                        <th>{{ $b->category->name }}</th>
                        <th>{{ $b->published_year }}</th>
                        <th>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $b->id }}">Edit</button>
                            <form action="{{ route('editbook.destroy', $b->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                            </form>
                              <!-- Modal Edit -->
                        <div class="modal fade" id="editModal{{ $b->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('book.update', $b->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Book</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Judul Buku</label>
                                                <input type="text" class="form-control" name="title" value="{{ $b->title }}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="author" class="form-label">Penulis</label>
                                                <input type="text" class="form-control" name="author" value="{{ $b->author }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="category_id" class="form-label">Karegori</label>
                                               <select name="category_id" id="category_id" class="form-select">
                                                <option value="1">Novel</option>
                                                <option value="2">komik</option>
                                                <option value="3">Biografi</option>
                                               </select>
                                            <div class="mb-3">
                                                <label for="published_year" class="form-label">Tahun Terbit</label>
                                                <input type="number" class="form-control" name="published_year" value="{{ $b->published_year }}" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        </th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    @if (session('success'))
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: 'right',
            backgroundColor: "#4CAF50",
            stopOnFocus: true,
        }).showToast();
    @endif

@endsection

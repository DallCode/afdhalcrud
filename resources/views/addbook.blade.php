@extends('layout.main')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.css">

<div class="container">
    <h2>Tambah Data Buku</h2>

    {{-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}

    <div class="card mt-4">
        <div class="card-header">
            <h5>Form Tambah Buku</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('addbook.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="tiitle" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Karegori</label>
                   <select name="category_id" id="category_id" class="form-select">
                    <option value="1">Novel</option>
                    <option value="2">komik</option>
                    <option value="3">Biografi</option>
                   </select>
                </div>

                <div class="mb-3">
                    <label for="published_year" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="published_year" name="published_year" required maxlength="4">
                </div>

                <button type="submit" class="btn btn-primary">Tambah Perusahaan</button>
            </form>
        </div>
    </div>
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
</script>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <a href=" {{ route ('admin.products.create') }}"
                class="btn btn-primary mb-3"
                >
                    Tambah Data
                </a>
            </div>
        </div>
        {{-- alert success --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- alert error --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Produk
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Stock</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Product rows will be populated here -->
                                @forelse ($products as $item)
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name ?? 'N/A' }}</td>
                                    <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>
                                        @if($item->image)
                                            <img src="{{ asset('storage/products/' . $item->image) }}" alt="{{ $item->name }}" style="max-width: 100px;">
                                        @else
                                            <p class="text-muted">Tidak ada gambar</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.products.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('admin.products.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak ada data produk.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
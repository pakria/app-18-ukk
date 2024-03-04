@extends('layout.index')
@section('konten')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"> Data User</h1>
                <!-- DataTales Example -->
                <!-- Button trigger modal -->
                <div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-border-0 shadow-sm rounded">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4>Table Buku</h4>
                                <a href="{{ route('buku.create') }}" class="btn btn-md btn-primary mb-3">Tambah Buku</a>
                            </div>
                            <table class="table table-boarded">
                                <thead>
                                    <tr>
                                        <th scope="">no</th>
                                        <th scope="">judul</th>
                                        <th scope="">penulis</th>
                                        <th scope="">penerbit</th>
                                        <th scope="">deskripsi</th>
                                        <th scope="">kategori</th>
                                        <th scope="">cover</th>
                                        <th scope="">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($buku as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->penulis }}</td>
                                        <td>{{ $item->penerbit }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td><img src="{{ asset('storage/pubic/buku/'.$item->cover) }}" alt=""></td>
                                        <td>
                                            <form action="{{ route('user.destroy', $item->id) }}" onsubmit="return confirm('Apakah Anda Yakin ?')"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-dark">Edit</a>
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>          
                                    </tr> 
                                    @empty
                                        <tr>
                                            <td colspan="5">Data Tidak Tersedia</td>
                                        </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
@endsection

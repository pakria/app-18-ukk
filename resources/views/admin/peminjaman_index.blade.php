@extends('layout.index')
@section('konten')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"> Data Peminjam</h1>
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
                                <h4>Table Peminjaman</h4>
                            </div>
                            <table class="table table-boarded">
                                <thead>
                                    <tr>
                                        <th scope="">no</th>
                                        <th scope="">Nama Peminjam</th>
                                        <th scope="">Judul Buku</th>
                                        <th scope="">jumlah</th>
                                        <th scope="">Cover</th>
                                        <th scope="">status</th>
                                        <th scope="">aksi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($peminjaman as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->buku->judul }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                        <td><img src="{{ asset('storage/buku/'.$item->buku->cover) }}" alt="" style="width: 100px; height:100px"></td>
                                        <td>{{ $item->status }}</td>
                                        <td>                                     
                                            <a href="{{ route('peminjaman.show', $item->id) }}" class="btn btn-sm btn-dark">Detail</a>                                         
                                        </td>
                                    
                                    </tr> 
                                    @empty
                                        <tr>
                                            <td colspan="9">Data Tidak Tersedia</td>
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

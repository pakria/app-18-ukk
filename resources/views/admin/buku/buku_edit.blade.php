@extends('layout.index')

@section('konten')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Data User</h1>
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
                            <form action="{{ route('buku.edit')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="judul">judul</label>
                                    <input type="text" class="form-control" name="judul" id="judul" aria-describedby="emailHelp">
                                    @error('judul')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="penulis">penulis</label>
                                    <input type="text" class="form-control" name="penulis" id="penulis" aria-describedby="emailHelp">
                        
                                    @error('penulis')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="penerbit">penerbit</label>
                                    <input type="text" class="form-control" name="penerbit" id="penerbit" aria-describedby="emailHelp">
                                    @error('penerbit')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" aria-describedby="emailHelp">
                                    @error('deskripsi')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kategori">kategori</label>
                                    <select class="custom-select" name="kategori" id="Kategori">
                                        <option selected>Pilih Kategori</option>
                                        <option value="fiksi">Fiksi</option>
                                        <option value="nonfiksi">Non Fiksi</option>
                                    </select>
                                    @error('kategori')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="cover">cover</label>
                                    <input type="file" class="form-control" name="cover" id="cover" aria-describedby="emailHelp">
                                    @error('cover')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
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

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
                            <form action="{{ route('user.pinjam.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="user_id" value="{{ $user->id }}" hidden>
                                <input type="text" name="buku_id" value="{{ $buku->id }}" hidden>
                                <div class="form-group">
                                    <label for="jumlah">Judul Buku</label>
                                    <label for=""> {{ $buku->judul }}</label>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">jumlah</label>
                                    <input type="number" class="form-control" name="jumlah" id="jumlah" aria-describedby="emailHelp">
                                    @error('jumlah')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status" hidden>status</label>
                                    <select class="custom-select" name="status" id="status" hidden>
                                        <option selected>Pilih status</option>
                                        <option value="dipinjam" selected>di pinjam</option>
                                    </select>
                                    @error('status')
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

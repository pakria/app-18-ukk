@extends('layout.index')

@section('konten')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">peminjam</h1>
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
                            <form action="{{ route('buku.update', $buku->id)}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="judul">judul</label>
                                    <input type="text" class="form-control" value="{{ old('judul', $buku->judul) }}" name="judul" id="judul" aria-describedby="emailHelp">
                                    @error('judul')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="penulis">penulis</label>
                                    <input type="text" class="form-control" value="{{ old('penulis', $buku->penulis) }}" name="penulis" id="penulis" aria-describedby="emailHelp">
                                    @error('penulis')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="penerbit">penerbit</label>
                                    <input type="text" class="form-control" value="{{ old('penerbit', $buku->penerbit) }}" name="penerbit" id="penerbit" aria-describedby="emailHelp">
                                    @error('penerbit')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="thn_terbit">thn_terbit</label>
                                    <input type="date" class="form-control" value="{{ old('thn_terbit', $buku->thn_terbit) }}" name="thn_terbit" id="thn_terbit" aria-describedby="emailHelp">
                                    @error('thn_terbit')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">deskripsi</label>
                                    <input type="text" class="form-control" value="{{ old('deskripsi', $buku->deskripsi) }}" name="deskripsi" id="deskripsi" aria-describedby="emailHelp">
                                    @error('deskripsi')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kategori">kategori</label>
                                    <select class="custom-select" value="{{ old('kategori', $buku->kategori) }}" name="kategori" id="Kategori">
                                        <option selected>Pilih Kategori</option>
                                        <option value="fiksi" {{ $buku->kategori == 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                                        <option value="nonfiksi" {{ $buku->kategori == 'nonfiksi' ? 'selected' : '' }}>Non Fiksi</option>
                                    </select>
                                    @error('kategori')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="cover">cover</label>
                                    <img src="{{ asset('storage/buku/'.$buku->cover) }}" alt="" style="width: 100px; height:100px">
                                    @error('cover')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                               
                                <div class="form-group">
                                    <a href="{{ route('buku.index') }}" class="btn btn-primary">back</a>
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

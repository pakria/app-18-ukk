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
                            <form action="{{ route('user.update', $user->id)}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" value="{{ old('name', $user->name) }}" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" value="{{ old('email', $user->email) }}" name="email" id="email" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $user->alamat) }}" id="alamat" aria-describedby="emailHelp">
                                    @error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" name="telepon" value="{{ old('telepon', $user->telepon) }}" id="telepon" aria-describedby="emailHelp">
                                    @error('telepon')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="custom-select" name="role" id="role">
                                        <option selected>Pilih Role</option>
                                        <option value="admin" {{ $user->role=='admin' ? 'selected' : '' }}>admin</option>
                                        <option value="petugas" {{ $user->role=='petugas' ? 'selected' : '' }}>petugas</option>
                                        <option value="peminjam" {{ $user->role=='peminjam' ? 'selected' : '' }}>peminjam</option>
                                    </select>
                                    @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                     @enderror      
                                  </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Password Confirm</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" aria-describedby="emailHelp">
                                    @error('password_confirmation')
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

@extends('layout.index')
@section('konten')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Kategori Buku</h1>
                <!-- DataTales Example -->
               <!-- Button trigger modal -->
               <div>
                </div>
                <a type="" href="{{ route('create') }}" class="btn btn-primary">Tambah Buku</a>
                <form action="{{ route('create') }}" >
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                        <tr>
                            <th>pakri</th>

                        </tr>
                    </tbody>
                        </table>
                    </div>
                </div>
                </form>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

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

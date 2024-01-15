@extends('admin.pasien')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('admin.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_pasien">Nama </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Input Nama Pasien">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="dokter">Dokter </label>
                                        <input type="select" class="form-control" id="dokter" name="dokter"
                                            placeholder="Pilih Dokter">
                                    </div> --}}
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
@endsection

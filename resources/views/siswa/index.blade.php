@extends('template.master')

@section('content')
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Halaman Data Table</h3>
    </div>
      <div class="card-body">
      <div class="card-body">
        <a href="{{ route('siswa.index') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i>
          Student Create
        </a>
      </div>
        <table id="example2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nisn</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Spp Id</th>
          </tr>
          </thead>
        </table> 
      <!-- /.card-body -->
    </div>
</div>
@endsection
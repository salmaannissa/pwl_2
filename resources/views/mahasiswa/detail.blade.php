@extends('layouts.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DATA MAHASISWA</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nim : </b>{{$Mahasiswa->nim}}</li>
                <li class="list-group-item"><b>Nama : </b>{{$Mahasiswa->nama}}</li>
                <li class="list-group-item"><b>Kelas : </b>{{$Mahasiswa->kelas->nama_kelas}}</li>
                <li class="list-group-item"><b>Jk : </b>{{$Mahasiswa->jk}}</li>
                <li class="list-group-item"><b>Tempat_lahir : </b>{{$Mahasiswa->tempat_lahir}}</li>
                <li class="list-group-item"><b>Tanggal_lahir : </b>{{$Mahasiswa->tanggal_lahir}}</li>
                <li class="list-group-item"><b>Alamat : </b>{{$Mahasiswa->alamat}}</li>
                <li class="list-group-item"><b>Hp : </b>{{$Mahasiswa->hp}}</li>
            </ul>
        </div>
    </div>
       
      
    <!-- /.card -->

    </section>
@endsection
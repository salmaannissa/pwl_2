@extends('layouts.template')

@section('content')
<section class="content">
	<div class="card">
        <div class="card-header">
			<h3 class="card-title"> Profile Mahasiswa</h3>
			<div class="card-tools">
				<button type="button" class="btn-tool" data-card-widge="collapse" title="collapse">
					<i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn-tool" data-card-widge="collapse" title="collapse">
					<i class="fas fa-times"></i>
				</button>
			</div>
		</div>
		<div class="card-body">
			Nama Lengkap : {!! $name !!} <br>
			Nama Panggilan : {!! $nickname !!} <br>
			NIM : {!! $nim !!} <br>
			Kelas : {!! $class !!} <br>
			Absen : {!! $absen !!} <br>
			Prodi : {!! $prodi !!} <br>
			Jurusan : {!! $jurusan !!} <br>
			Kampus : {!! $college !!} <br>
		</div>
	</div>
</section>
@endsection
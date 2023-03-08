@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Mata Kuliah Salma Annissa </h3>
            <br>
        </div>
        <div class="card-body">
            <table class="table">
                <tr><th>No</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Mata Kuliah</th>
                    <th>Dosen Pengampu</th>
                    <th>SKS</th>
                </tr>
                @foreach($mk as $no => $h)
                <tr>
                    <td>{{$no+1}}</td>
                    <td>{{$h->kode}}</td>
                    <td>{{$h->nama}}</td>
                    <td>{{$h->dosen}}</td>
                    <td>{{$h->sks}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection
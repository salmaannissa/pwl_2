@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Keluarga Salma Annissa </h3>
            <br>
        </div>
        <div class="card-body">
            <table class="table">
                <tr><th>No</th>
                    <th>Nama</th>
                    <th>Hubungan</th>
                    <th>Umur</th>
                    <th>Pekerjaan</th>
                </tr>
                @foreach($kel as $no => $h)
                <tr>
                    <td>{{$h->id}}</td>
                    <td>{{$h->nama}}</td>
                    <td>{{$h->hubungan}}</td>
                    <td>{{$h->umur}}</td>
                    <td>{{$h->pekerjaan}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection
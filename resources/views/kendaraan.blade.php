@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Kendaraan </h3>
            <br>
        </div>
        <div class="card-body">
            <table class="table">
                <tr><th>No</th>
                    <th>Nomor Polisi</th>
                    <th>Merk</th>
                    <th>Jenis</th>
                    <th>Tahun</th>
                    <th>Warna</th>
                </tr>
                @foreach($kend as $no => $k)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$k->nopol}}</td>
                    <td>{{$k->merk}}</td>
                    <td>{{$k->jenis}}</td>
                    <td>{{$k->tahun}}</td>
                    <td>{{$k->warna}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection
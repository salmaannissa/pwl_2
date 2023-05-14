@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <b> Data Mata Kuliah </b> </h3>
            <br>
        </div>
        <div class="card-body">
            <table class="table">
                <tr><th>#</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th>Semester</th>
                </tr>
                @foreach($mk as $no => $h)
                <tr>
                    <td>{{$no+1}}</td>
                    <td>{{$h->nama_matkul}}</td>
                    <td>{{$h->sks}}</td>
                    <td>{{$h->jam}}</td>
                    <td>{{$h->semester}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection
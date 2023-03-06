@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Hobi Salma Annissa </h3>
            <br>
        </div>
        <div class="card-body">
            <table class="table">
                <tr><th>No</th>
                    <th>Hobi</th>
                    <th>Alasan</th>
                </tr>
                @foreach($hb as $no => $h)
                <tr>
                    <td>{{$h->id}}</td>
                    <td>{{$h->Hobi}}</td>
                    <td>{{$h->Alasan}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection
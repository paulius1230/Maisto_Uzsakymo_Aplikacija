@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row py-4">
        <h1 class="text-secondary">Mano profilis</h1>
    </div>


    <div class="row py-4">
        <div class="col-lg-6 col-sm-12">
        <ul class="nav nav-pills flex-column">
        <hr>
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#manouzsakymai">Mano užsakymai</a>
        </li>
        </ul>
        </div>

        <div class="col-lg-6 col-sm-12">
        <div class="tab-content">
        <div class="tab-pane container active" id="manouzsakymai">
        <h2 class="text-secondary">Mano Užsakymai</h2>
        @if(count($uzsak) < 1)
        <div class="text-secondary">Užsakymų nėra</div>                                 
        @else
            <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="text-align: center;  vertical-align: middle;">Patiekalo pavadinimas</th>
                <th style="text-align: center;  vertical-align: middle;">Kiekis</th>
                <th style="text-align: center;  vertical-align: middle;">Kaina</th>
                <th style="text-align: center;  vertical-align: middle;">Busena</th>
                <th style="text-align: center;  vertical-align: middle;">Data</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($uzsak as $uzsakymas)
            <tr>
                <td style="text-align: center;  vertical-align: middle;">{{\App\Models\patiekalas::find($uzsakymas->patiekalo_id)->patiekalo_pavadinimas}}</td>
                <td style="text-align: center;  vertical-align: middle;">{{$uzsakymas->kiekis}}</td>
                <td style="text-align: center;  vertical-align: middle;">{{\App\Models\patiekalas::find($uzsakymas->patiekalo_id)->patiekalo_kaina}}</td>
                <td style="text-align: center;  vertical-align: middle; @if ($uzsakymas->busena == 'vykdoma') color: orange; @elseif ($uzsakymas->busena == 'priimta') color: green; @else color: red @endif ;">{{$uzsakymas->busena}}</td>
                <td style="text-align: center;  vertical-align: middle;">{{$uzsakymas->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @endif
        </div>

        </div>
        </div>

    </div>

</div>
@endsection
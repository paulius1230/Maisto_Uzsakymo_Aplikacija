@extends('layouts.app')

@section('content')

<style>
#vykdomuKiekis{
  background: red;
  color: white;
  font-size: 14px;
  margin-left: 0.15rem;
  border-radius: 1rem;
  padding: 0.01rem 0.4rem;
}

</style>

<div class="container">
 
<div class="row py-4">
  <h1 class="text-secondary">Administratoriaus valdymo panelė</h1>
</div>

  @if (session('status'))
    <div class="row py-4">
    <h6 class="alert alert-success">{{ session('status') }}</h6>
    </div>
  @endif

  @if (session('meniu-status'))
    <div class="row py-4">
    <h6 class="alert alert-success">{{ session('meniu-status') }}</h6>
    </div>
  @endif

  @if (session('patiekalas-status'))
    <div class="row py-4">
    <h6 class="alert alert-success">{{ session('patiekalas-status') }}</h6>
    </div>
  @endif

  @if (session('photo-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('photo-failure') }}</h6>
    </div>
  @endif

  @if (session('pavadinimas-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('pavadinimas-failure') }}</h6>
    </div>
  @endif

  @if (session('kodas-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('kodas-failure') }}</h6>
    </div>
  @endif

  @if (session('adresas-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('adresas-failure') }}</h6>
    </div>
  @endif

  @if (session('meniu-pavadinimas-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('meniu-pavadinimas-failure') }}</h6>
    </div>
  @endif

  @if (session('maitinimo-istaigos-id-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('maitinimo-istaigos-id-failure') }}</h6>
    </div>
  @endif

  @if (session('patiekalo-pavadinimas-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('patiekalo-pavadinimas-failure') }}</h6>
    </div>
  @endif

  @if (session('patiekalo-kaina-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('patiekalo-kaina-failure') }}</h6>
    </div>
  @endif

  @if (session('patiekalo-aprasymas-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('patiekalo-aprasymas-failure') }}</h6>
    </div>
  @endif

  @if (session('patiekalas-meniu-id-failure'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('patiekalas-meniu-id-failure') }}</h6>
    </div>
  @endif

  @if (session('uzsakymas-accepted'))
    <div class="row py-4">
    <h6 class="alert alert-success">{{ session('uzsakymas-accepted') }}</h6>
    </div>
  @endif

  @if (session('uzsakymas-denied'))
    <div class="row py-4">
    <h6 class="alert alert-danger">{{ session('uzsakymas-denied') }}</h6>
    </div>
  @endif

<div class="row py-4">

<div class="col-lg-6 col-sm-12">
<ul class="nav nav-pills flex-column">
<hr>
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#maitinimoistaigos">Maitinimo įstaigos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#meniu">Meniu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#patiekalai">Patiekalai</a>
  </li>
  <hr>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#uzsakymai">Užsakymai
      <span id="vykdomuKiekis">{{\DB::table('uzsakymai')->where('busena', '=', 'vykdoma') ->get()->count()}}</span>
    </a>
  </li>
</ul>
</div>

<div class="col-lg-6 col-sm-12">


<div class="tab-content">
<div class="tab-pane container active" id="maitinimoistaigos">
  <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#visosmaitinimoistaigos">Visos maitinimo įstaigos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#pridetimaitinimoistaiga">Pridėti maitinimo įstaigą</a>
  </li>
</ul>

<div class="tab-content py-4">

<div class="tab-pane container active" id="visosmaitinimoistaigos" style="padding: 0;">
@if(count($istaig) < 1)
<div class="text-secondary">Tuščia</div>                                 
@else
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="text-align: center;  vertical-align: middle;">Maitinimo įstaigos ID</th>
        <th style="text-align: center;  vertical-align: middle;">Maitinimo įstaigos Pavadinimas</th>
        <th style="text-align: center;  vertical-align: middle;">Maitinimo įstaigos Kodas</th>
        <th style="text-align: center;  vertical-align: middle;">Maitinimo įstaigos Adresas</th>
        <th style="text-align: center;  vertical-align: middle;">Maitinimo įstaigos Nuotrauka</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($istaig as $istaiga)
      <tr>
        <td style="text-align: center;  vertical-align: middle;">{{$istaiga->id}}</td>
        <td style="text-align: center;  vertical-align: middle;">{{$istaiga->pavadinimas}}</td>
        <td style="text-align: center;  vertical-align: middle;">{{$istaiga->kodas}}</td>
        <td style="text-align: center;  vertical-align: middle;">{{$istaiga->adresas}}</td>
        <td style="text-align: center;  vertical-align: middle;">
        <img src="{{ asset('nuotraukos/istaigos/' . $istaiga->nuotrauka) }}" width="70px" height="70px" style="object-fit: cover;" alt="nuotrauka">
        </td>
        <td style="text-align: center;  vertical-align: middle;"><a href="{{ url('redaguoti-istaiga/' . $istaiga->id) }}" class="btn btn-primary btn-sm">Redaguoti</a></td>
        <td style="text-align: center;  vertical-align: middle;"><a href="{{ url('istrinti-istaiga/' . $istaiga->id) }}" class="btn btn-danger btn-sm">Šalinti</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>


<form class="tab-pane container fade" style="padding: 0;" id="pridetimaitinimoistaiga" action="{{url('admin_dashboard/maitinimoistaigos')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="pavadinimas" class="form-label">Maitinimo įstaigos pavadinimas</label>
    <input type="text" class="form-control" name="pavadinimas" id="pavadinimas">
  </div>
  <div class="mb-3">
    <label for="kodas" class="form-label">Maitinimo įstaigos kodas</label>
    <input type="text" class="form-control" name="kodas" id="kodas">
  </div>
  <div class="mb-3">
    <label for="adresas" class="form-label">Maitinimo įstaigos adresas</label>
    <input type="text" class="form-control" name="adresas" id="adresas">
  </div>
  <div class="mb-3">
  <label for="nuotrauka" class="form-label">Maitinimo įstaigos nuotrauka</label>
  <input class="form-control" type="file" name="nuotrauka" id="nuotrauka">
</div>
  <div class="w-100">
   <button type="submit" class="btn btn-primary float-end">Pateikti</button>   
  </div>
</form>
</div>

<!-- end of tab-pane -->
  </div>
<div class="tab-pane container fade" id="meniu">

<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#visosmeniu">Visos meniu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#pridetimeniu">Pridėti meniu prie maitinimo įstaigos</a>
  </li>
</ul>




<div class="tab-content py-4">


<div class="tab-pane container active" id="visosmeniu" style="padding: 0;">
@if(count($men) < 1)
<div class="text-secondary">Tuščia</div>                                 
@else
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="text-align: center;  vertical-align: middle;">Meniu ID</th>
        <th style="text-align: center;  vertical-align: middle;">Meniu pavadinimas</th>
        <th style="text-align: center;  vertical-align: middle;">Maitinimo įstaigos ID</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($men as $meniu)
      <tr>
        <td style="text-align: center;  vertical-align: middle;">{{$meniu->id}}</td>
        <td style="text-align: center;  vertical-align: middle;">{{$meniu->pavadinimas}}</td>
        <td style="text-align: center;  vertical-align: middle;">{{$meniu->maitinimo_istaigos_id}}</td>
        <td style="text-align: center;  vertical-align: middle;"><a href="{{ url('redaguoti-meniu/' . $meniu->id) }}" class="btn btn-primary btn-sm">Redaguoti</a></td>
        <td style="text-align: center;  vertical-align: middle;"><a href="{{ url('istrinti-meniu/' . $meniu->id) }}" class="btn btn-danger btn-sm">Šalinti</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>



<form class="tab-pane container fade" style="padding: 0;" id="pridetimeniu" action="{{url('admin_dashboard/meniu')}}" method="POST" enctype="multipart/form-data">
  @if(count($istaig) < 1)
  <div class="text-secondary">Turi buti bent viena maitinimo įstaiga, kad galetumete pridėti meniu</div>    
  @else
  @csrf
  <div class="mb-3">
    <label for="meniu-pavadinimas" class="form-label">Meniu pavadinimas</label>
    <input type="text" class="form-control" name="meniu-pavadinimas" id="meniu-pavadinimas">
  </div>
  <select class="form-select mb-3" name="maitinimo-istaigos-id" aria-label=".form-select-lg example">
  <option disabled selected>Pasirinkite maitinimo įstaigą</option>
  @foreach ($istaig as $istaiga)
    <option value="{!! $istaiga->id !!}">{{$istaiga->pavadinimas}}</option>
  @endforeach
  </select>
  <div class="w-100">
   <button type="submit" class="btn btn-primary float-end">Pateikti</button>   
  </div>
@endif
</form>

</div>


<!-- end of tab-pane -->
</div>


<div class="tab-pane container fade" id="patiekalai">

<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#visipatiekalai">Visi patiekalai</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#pridetipatiekala">Pridėti patiekalą prie meniu</a>
  </li>
</ul>




<div class="tab-content py-4">


<div class="tab-pane container active" id="visipatiekalai" style="padding: 0;">
@if(count($pat) < 1)
<div class="text-secondary">Tuščia</div>                                 
@else
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="text-align: center;  vertical-align: middle;">Patiekalo ID</th>
        <th style="text-align: center;  vertical-align: middle;">Patiekalo pavadinimas</th>
        <th style="text-align: center;  vertical-align: middle;">Patiekalo kaina</th>
        <th style="text-align: center;  vertical-align: middle;">Patiekalo aprasymas</th>
        <th style="text-align: center;  vertical-align: middle;">Meniu ID</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pat as $patiekalas)
      <tr>
        <td style="text-align: center;  vertical-align: middle;">{{$patiekalas->id}}</td>
        <td style="text-align: center;  vertical-align: middle;">{{$patiekalas->patiekalo_pavadinimas}}</td>
        <td style="text-align: center;  vertical-align: middle;">{{$patiekalas->patiekalo_kaina}}</td>
        <td style="text-align: center;  vertical-align: middle;">{{$patiekalas->patiekalo_aprasymas}}</td>
        <td style="text-align: center;  vertical-align: middle;">{{$patiekalas->meniu_id}}</td>
        <td style="text-align: center;  vertical-align: middle;"><a href="{{url('redaguoti-patiekala/' . $patiekalas->id)}}" class="btn btn-primary btn-sm">Redaguoti</a></td>
        <td style="text-align: center;  vertical-align: middle;"><a href="{{url('istrinti-patiekala/' . $patiekalas->id)}}" class="btn btn-danger btn-sm">Šalinti</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>



<form class="tab-pane container fade" style="padding: 0;" id="pridetipatiekala" action="{{url('admin_dashboard/patiekalai')}}" method="POST" enctype="multipart/form-data">
  @if(count($men) < 1)
  <div class="text-secondary">Turi buti bent vienas meniu, kad galetumete pridėti patiekalą</div>    
  @else
  @csrf
  <div class="mb-3">
    <label for="patiekalo-pavadinimas" class="form-label">Patiekalo pavadinimas</label>
    <input type="text" class="form-control" name="patiekalo-pavadinimas" id="patiekalo-pavadinimas">
  </div>
  <div class="mb-3">
    <label for="patiekalo-kaina" class="form-label">Patiekalo kaina</label>
    <input type="number" step="0.01" class="form-control" name="patiekalo-kaina" id="patiekalo-kaina">
  </div>
  <div class="mb-3">
    <label for="patiekalo-aprasymas" class="form-label">Patiekalo aprašymas</label>
    <textarea class="form-control" rows="5" name="patiekalo-aprasymas" id="patiekalo-aprasymas"></textarea>
  </div>
  <select class="form-select mb-3" name="patiekalas-meniu-id" aria-label=".form-select-lg example">
  <option disabled selected>Pasirinkite meniu</option>
  @foreach ($men as $meniu)
    <option value="{!! $meniu->id !!}">{{$meniu->pavadinimas}} ({{\App\Models\istaiga::find($meniu->maitinimo_istaigos_id)->pavadinimas}})</option> 
    @endforeach
  </select>
  <div class="w-100">
   <button type="submit" class="btn btn-primary float-end">Pateikti</button>   
  </div>
@endif
</form>

</div>



</div>


<div class="tab-pane container fade" id="uzsakymai">

@if(count($uzsak) < 1)
        <div class="text-secondary">Užsakymų nėra</div>                                 
        @else
            <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="text-align: center;  vertical-align: middle;">Vartotojo ID</th>
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
                <td style="text-align: center;  vertical-align: middle;">{{$uzsakymas->vartotojo_id}}</td>
                <td style="text-align: center;  vertical-align: middle;">{{\App\Models\patiekalas::find($uzsakymas->patiekalo_id)->patiekalo_pavadinimas}}</td>
                <td style="text-align: center;  vertical-align: middle;">{{$uzsakymas->kiekis}}</td>
                <td style="text-align: center;  vertical-align: middle;">{{\App\Models\patiekalas::find($uzsakymas->patiekalo_id)->patiekalo_kaina}}</td>
                <td style="text-align: center;  vertical-align: middle; @if ($uzsakymas->busena == 'vykdoma') color: orange; @elseif ($uzsakymas->busena == 'priimta') color: green; @else color: red @endif ;">{{$uzsakymas->busena}}</td>
                <td style="text-align: center;  vertical-align: middle;">{{$uzsakymas->created_at}}</td>
                <form class="tab-pane container" style="padding: 0;" action="{{url('priimti-uzsakyma/' . $uzsakymas->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <td style="text-align: center;  vertical-align: middle;"><button type="submit" class="btn btn-success btn-sm">Priimti</button></td>
                </form>
                <form class="tab-pane container" style="padding: 0;" action="{{url('atsaukti-uzsakyma/' . $uzsakymas->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <td style="text-align: center;  vertical-align: middle;"><button type="submit" class="btn btn-danger btn-sm">Atšaukti</button></td>
                </form>
              </tr>
            @endforeach
            </tbody>
        </table>
        @endif

</div>
<!-- end of tab content -->
</div>


<!-- end of col -->
</div>

<!-- end of row -->
</div>

<!-- end of container -->
</div>




@endsection
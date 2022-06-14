@extends('layouts.app')

@section('content')
<div class="container">
 
<div class="row py-4">
  <h1 class="text-secondary">Maitinimo įstaigos redagavimas</h1>
</div>

  @if (session('status'))
    <div class="row py-4">
    <h6 class="alert alert-success">{{ session('status') }}</h6>
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


<div class="row py-4">


<div class="col-12" style="padding: 0;">




<form style="padding: 0;" class="tab-pane container active" id="pridetimaitinimoistaiga" action="{{url('atnaujinti-istaiga/' . $ist->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="pavadinimas" class="form-label">Maitinimo įstaigos pavadinimas</label>
    <input type="text" class="form-control" name="pavadinimas" value="{{$ist->pavadinimas}}" id="pavadinimas">
  </div>
  <div class="mb-3">
    <label for="kodas" class="form-label">Maitinimo įstaigos kodas</label>
    <input type="text" class="form-control" name="kodas" value="{{$ist->kodas}}" id="kodas">
  </div>
  <div class="mb-3">
    <label for="adresas" class="form-label">Maitinimo įstaigos adresas</label>
    <input type="text" class="form-control" name="adresas" value="{{$ist->adresas}}" id="adresas">
  </div>
  <div class="mb-3">
  <label for="nuotrauka" class="form-label">Maitinimo įstaigos nuotrauka</label>
  <input class="form-control" type="file" name="nuotrauka" id="nuotrauka">
</div>
  <div class="w-100">
   <button type="submit" class="btn btn-primary float-end">Redaguoti</button>   
  </div>
</form>
</div>

<!-- end of tab-pane -->
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

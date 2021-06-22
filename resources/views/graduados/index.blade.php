@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Graduados</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('graduados.importar') }}" class="btn btn-success">Importar</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>matri_fec</th>
                          <th>fac_nom</th>
                          <th>carr_prog</th>
                          <th>egres_fec</th>
                          <th>apepat</th>
                          <th>apemat</th>
                          <th>nombre</th>
                          <th>sexo</th>
                          <th>docu_num</th>
                          <th>den_grad</th>
                          <th>prog_estu</th>
                          <th>mod_est</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($graduados as $key => $graduado)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $graduado->matri_fec}}</td>
                            <td>{{ $graduado->fac_nom}}</td>
                            <td>{{ $graduado->carr_prog}}</td>
                            <td>{{ $graduado->egres_fec}}</td>
                            <td>{{ $graduado->apepat}}</td>
                            <td>{{ $graduado->apemat}}</td>
                            <td>{{ $graduado->nombre}}</td>
                            <td>{{ $graduado->sexo}}</td>
                            <td>{{ $graduado->docu_num}}</td>
                            <td>{{ $graduado->den_grad}}</td>
                            <td>{{ $graduado->prog_estu}}</td>
                            <td>{{ $graduado->mod_est}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

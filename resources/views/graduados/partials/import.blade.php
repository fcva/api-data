@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="text-uppercase">Importar Graduados y Titulados</span>
                </div>

                <div class="card-body">

                    <form action="{{ route('graduados.importar.store') }}" method="POST" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <input type="file" name="file" required>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">
                                Guardar
                            </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Cerrar
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

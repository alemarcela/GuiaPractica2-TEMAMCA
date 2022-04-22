@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de Productos') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{route('store')}}">
                        @include('productos.formprods')
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

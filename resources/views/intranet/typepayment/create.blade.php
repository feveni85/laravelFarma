@extends('layouts.intranet')


@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Crear tipo de pago</h3>

            <div class="card-tools">
                <a type="button" class="btn btn-tool" href="{{ route('typepayment.index') }}">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <form method="POST" action="{{ route('typepayment.store') }}">
            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label for="typepayment">Tipo de pago</label>
                <input type="text" class="form-control" placeholder="Tipo de pago" name="varTypePayment">
                @if ($errors->has('varTypePayment'))
                    <span class="text-danger">{{ $errors->first('varTypePayment') }}</span>
                @endif
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="bitState">
                <label class="form-check-label" for="bitState">Activo</label>
                @if ($errors->has('bitState'))
                    <span class="text-danger">{{ $errors->first('bitState') }}</span>
                @endif
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
    </div>

@endsection

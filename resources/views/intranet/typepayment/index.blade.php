@extends('layouts.intranet')


@section('content-header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tipo de Pagos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                </ol>
            </div>
        </div>
    </div>

@endsection

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tipos de Pagos</h3>

            <div class="card-tools">
                <a type="button" class="btn btn-tool" href="{{ route('typepayment.create') }}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Tipo de Pago</th>
                        <th>Estado</th>
                        <th style="width: 40px">...</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->idTypePaymnet }}</td>
                            <td>{{ $item->varTypePayment }}</td>
                            <td>{{ $item->bitState }}</td>
                            <td><span class="badge bg-danger">55%</span></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="card-footer">
            Footer
        </div>

    </div>

@endsection

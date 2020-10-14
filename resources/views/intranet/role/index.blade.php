@extends('layouts.intranet')

@section('content-header')

<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1>Roles</h1>
		</div>
	</div>
</div>

@endsection

@section('content')


<div class="card">
	<div class="card-header">
		<h3 class="card-title">Roles</h3>

		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-toggle="tooltip"
			title="Collapse">
			<i class="fas fa-plus"></i>
		</button>
	</div>
</div>
<div class="card-body">

	<table class="table table-bordered">
		<thead>                  
			<tr>
				<th style="width: 10px">ID</th>
				<th>Cargo</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1.</td>
				<td>Técnico</td>

				<td><span class="badge bg-danger">1</span></td>
			</tr>
		</tbody>
	</table>



</div>

<div class="card-footer">
	Footer
</div>

<div class="card-footer clearfix">
	<ul class="pagination pagination-sm m-0 float-right">
		<li class="page-item"><a class="page-link" href="#">«</a></li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">»</a></li>
	</ul>
</div>

</div>

@endsection

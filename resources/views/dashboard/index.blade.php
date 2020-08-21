@extends('layouts.master')

@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Mata Pelajaran</h3>
							</div>
							<div class="panel-body">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>KODE</th>
											<th>NAMA</th>
											<th>SEMESTER</th>
											<th>NILAI</th>
											<th>GURU</th>
											<th>AKSI</th>
										</tr>
									</thead>
									<tbody>
										@foreach($siswa->mapel as $mapel)
										<tr>
											<td>{{$mapel->kode}}</td>
											<td>{{$mapel->nama}}</td>
											<td>{{$mapel->semester}}</td>
											<td><a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id}}" data-url="/api/siswa/{{$siswa->id}}/editnilai" data-title="Masukkan Nilai">{{$mapel->pivot->nilai}}</a></td>
											<td><a href="/guru/{{$mapel->guru_id}}/profile">{{$mapel->guru->nama}}</a></td>
											<td><a href="/siswa/{{$siswa->id}}/{{$mapel->id}}/deletenilai" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a></td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
@stop
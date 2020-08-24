@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Posts</h3>
									<div class="right">
										<a href="/siswa/exportpdf" class="btn btn-sm btn-primary">Export PDF</a>

									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>NAMA DEPAN</th>
												<th>NAMA BELAKANG</th>
												<th>JENIS KELAMIN</th>
												<th>AGAMA</th>
												<th>ALAMAT</th>
												<th>NILAI RATA-RATA</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_siswa as $siswa)
											<tr>
												<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a></td>
												<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_belakang}}</a></td>
												<td>{{$siswa->jenis_kelamin}}</td>
												<td>{{$siswa->agama}}</td>
												<td>{{$siswa->alamat}}</td>
												<td>{{$siswa->rataRataNilai()}}</td>
												<td>
													<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<a href="#" class="btn btn-danger btn-sm delete" siswa-id="{{$siswa->id}}">Delete</a>
												</td>
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
	</div>

@stop

@section('footer')
	<script>
		$('.delete').click(function(){
			var siswa_id = $(this).attr('siswa-id');
			swal({
			  title: "Yakin?",
			  text: "Mau dihapus data siswa dengan id "+siswa_id +" ?",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
				console.log(willDelete);
			  if (willDelete) {
					window.location = "/siswa/"+siswa_id+"/delete";
			  }
			});

		});
	</script>
@stop
@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Add new post</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-8">
											<form action="/siswa/create" method="post" enctype="multipart/form-data">
									        	{{csrf_field()}}
											  <div class="form-group{{$errors->has('nama_depan') ? ' has-error' : ''}}">
											    <label for="exampleInputEmail1">Nama Depan</label>
											    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{old('nama_depan')}}">
											    @if($errors->has('nama_depan'))
											    	<span class="help-block">{{$errors->first('nama_depan')}}</span>
											    @endif
											  </div>
											</form>
										</div>

										<div class="col-md-4">
											Ini untuk thumbnail
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop
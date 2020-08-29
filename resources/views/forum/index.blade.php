@extends('layouts.master')

@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Forum</h3>
									<div class="right">
										<a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Tambah Forum</a>
                                        <a type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle">Tambah Forum</i></a>
									</div>
								</div>
								<div class="panel-body">
                                <ul class="list-unstyled activity-list">
                                    @foreach($forum as $frm)
										<li>
											<img src="{{$frm->user->siswa->getAvatar()}}" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">{{$frm->user->siswa->judul}}: {{$frm->judul}}<span class="timestamp">{{$frm->created_at->diffForHumans()}}</span></p>
										</li>
									@endforeach
									</ul>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Forum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/forum/create" method="post">
        	{{csrf_field()}}

		  <div class="form-group{{$errors->has('judul') ? ' has-error' : ''}}">
		    <label for="exampleInputEmail1">Judul</label>
		    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{old('judul')}}">
		    @if($errors->has('judul'))
		    	<span class="help-block">{{$errors->first('judul')}}</span>
		    @endif
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Belakang</label>
		    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{old('nama_belakang')}}">
		  </div>

@endsection
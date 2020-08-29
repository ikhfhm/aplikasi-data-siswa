@extends('layouts.master')

@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
                    <div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">{{$forum->judul}}</h3>
					<p class="panel-subtitle">{{$forum->created_at->diffForHumans()}}</p>
				</div>
				<div class="panel-body">
					{{$forum->konten}}
				</div>
			</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @endsection
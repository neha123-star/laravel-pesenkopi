@extends('layouts.appadmin')

@section('content')

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Form</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('choco.index')}}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Edit</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<!-- Default Basic Forms Start -->
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Edit data Choco</h4>
					</div>
				</div>
				@foreach($choco as $co)
				<form method="post" action="{{ route('choco.update',$co->id) }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="form-group row">
						<label for="nama_co" class="col-sm-12 col-md-2 col-form-label">Nama</label>
						<div class="col-sm-12 col-md-10">
						<input type="text" name="nama_co" class="form-control" value="{{$co->nama_co}}">
						@if($errors->has('nama_co'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_co')}}
                                </div>
                            @endif
						</div>
					</div>
					<div class="form-group row">
						<label for="harga_co" class="col-sm-12 col-md-2 col-form-label">Harga</label>
						<div class="col-sm-12 col-md-10">
						<input type="text" name="harga_co" class="form-control" value="{{$co->harga_co}}">
						@if($errors->has('harga_co'))
                                <div class="text-danger">
                                    {{ $errors->first('harga_co')}}
                                </div>
                            @endif
						</div>
					</div>
					<div class="form-group row">
						<label for="gambar_co" class="col-sm-12 col-md-2 col-form-label">Gambar</label>
						<div class="col-sm-12 col-md-10">
						<input type="file" class="form-control-file form-control height-auto" name="gambar_co" value="{{$co->gambar_co}}">
						<img src="{{ url('assets/uploads/minuman/kopi/'.$co->gambar_co) }}" class="img-thumbnail my-2" width="100" height="100" alt="">
						@if($errors->has('gambar_co'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar_co')}}
                                </div>
                            @endif
						
						</div>
					</div>
					<div class="form-group row">
						<label for="keterangan_co" class="col-sm-12 col-md-2 col-form-label">Keterangan</label>
						<div class="col-sm-12 col-md-10">
						<textarea name="keterangan_co" class="form-control">{{$co->keterangan_co}}</textarea>
						@if($errors->has('keterangan_co'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan_co')}}
                                </div>
                            @endif
						</div>
					</div>

					<div class="form-group text-right">
						<input type="submit" class="btn btn-success" >
					</div>

				</form>
				@endforeach
					

					</div>
		</div>
	</div>
	



@endsection
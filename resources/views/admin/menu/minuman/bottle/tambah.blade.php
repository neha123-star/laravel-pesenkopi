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
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<!-- Default Basic Forms Start -->
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Tambah data Bottle</h4>
					</div>
				</div>
			<form method="post" action="{{route('bottle.store')}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
						<div class="col-sm-12 col-md-10">
						<input type="text" id="nama_bt" name="nama_bt" class="form-control" placeholder="Masukkan Nama Produk"">
						@if($errors->has('nama_bt'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_bt')}}
                                </div>
                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Harga</label>
						<div class="col-sm-12 col-md-10">
							<input type="text" id="harga_bt" name="harga_bt" class="form-control" placeholder="Masukkan Harga Produk ">
							@if($errors->has('harga_bt'))
                                <div class="text-danger">
                                    {{ $errors->first('harga_bt')}}
                                </div>
                        	@endif
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
						<div class="col-sm-12 col-md-10">
							<input type="file" id="gamber_bt" class="form-control-file form-control height-auto" name="gambar_bt">
							@if($errors->has('gambar_bt'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar_bt')}}
                                </div>
                        	@endif
						</div>
					</div>			

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Keterangan</label>
						<div class="col-sm-12 col-md-10">
							<textarea name="keterangan_bt" id="keterangan_bt" class="form-control" placeholder="Keterangan tentang menu" ></textarea>
							@if($errors->has('keterangan_bt'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan_bt')}}
                                </div>
                        	@endif
						</div>
					</div>

					<div class="form-group text-right">
						<input type="submit" class="btn btn-success" value="Simpan">
					</div>

				</form>
					

					</div>
		</div>
	</div>
	



@endsection
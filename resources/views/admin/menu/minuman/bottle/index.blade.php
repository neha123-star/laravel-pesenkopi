@extends('layouts.appadmin')

@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Menu Bottle Series</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Menu Minuman</li>
                                <li class="breadcrumb-item active" aria-current="page">Bottle</li>
                            </ol>
                        </nav>
                    </div>
                </div>
			</div>
			<div class="card-box mb-30">
			<a href=" {{route('bottle.create')}}" class="btn btn-primary">Tambah</a>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Produk</th>
							<th>Nama</th>
							<th>Keterangan</th>
							<th>Harga</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bottle as $bt)
						<tr>
							<td class="table-plus">
							<img src="{{url('assets/uploads/minuman/bottle/'.$bt->gambar_bt)}}" class="img-thumbnail" width="70" height="70" alt="">
							</td>
							<td>{{$bt->nama_bt}}</td>
							<td>{{$bt->keterangan_bt}}</td>
							<td>{{$bt->harga_bt}}K</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="{{ route('bottle.edit',$bt->id) }}"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="{{ route('bottle.delete',$bt->id) }}"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
        </div>
    </div>
</div>

@endsection
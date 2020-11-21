@extends('layouts.appcoffe')

@section('content')
<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url({{ url('assets/coffe/images/bg_2.png')}});">

		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<h1 class="mb-3 mt-5 bread">Menu</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="/index">Home</a></span> <span>Menu</span></p>
				</div>

			</div>
		</div>
	</div>

	
	
</section>

<section class="ftco-intro" >
	<div class="container-wrap">
		<div class="wrap d-md-flex align-items-xl-end">
			<div class="info col-lg" style="height: 129.9376px;">
				<div class="row no-gutters">
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-phone"></span></div>
						<div class="text">
							<h3>(+62) 8213 1181 285</h3>
							<p>Hubungi nowor berikut</p>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-my_location"></span></div>
						<div class="text">
							<h3>Parkiran Alun-alun kota Batu</h3>
							<p>Sisir, Kec. Batu, Kota Batu, Jawa Timur 65311</p>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-clock-o"></span></div>
						<div class="text">
							<h3>Buka Senin-Minggu</h3>
							<p>12:00 - 0:00</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Daftar Menu</h2>
            
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#kopiice" role="tab" aria-controls="kopiice" aria-selected="true">Kopi</a>

		              <a class="nav-link" id="tea-tab" data-toggle="pill" href="#tea" role="tab" aria-controls="tea" aria-selected="false">Tea</a>

		              <a class="nav-link" id="choco-tab" data-toggle="pill" href="#choco" role="tab" aria-controls="choco" aria-selected="false">Choco</a>
		              <a class="nav-link" id="dalgona-tab" data-toggle="pill" href="#dalgona" role="tab" aria-controls="dalgona" aria-selected="false">Dalgona</a>
		              <a class="nav-link" id="bottle-tab" data-toggle="pill" href="#bottle" role="tab" aria-controls="bottle" aria-selected="false">Bottle Series</a>
		              <a class="nav-link" id="brownis-tab" data-toggle="pill" href="#brownis" role="tab" aria-controls="brownis" aria-selected="false">Brownis</a>
		              
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="kopiice" role="tabpanel" aria-labelledby="kopiice-tab">
		              	<div class="row">
							@foreach($kopiice as $ki)
		              		<div class="col-md-4 text-center" style="margin-right: auto">
		              			<div class="menu-wrap">
									  <img src="{{ url('assets/uploads/minuman/kopi/'.$ki->gambar_koice) }}" class="menu-img img mb-4 text-center" style="display: block; margin: auto;" alt="">
		              				<div class="text-center">
		              					<h3><a href="#">{{ $ki->nama_koice }}</a></h3>
		              					<p class="d-inline-block text-truncate" style="max-width: 200px;">{{ $ki->keterangan_koice }}</p>
		              					<p class="price"><span>{{ $ki->harga_koice }}K</span></p>
		              				</div>
		              			</div>
							  </div>
							  @endforeach
		              	</div>
					  </div>
					  
					  <div class="tab-pane fade" id="tea" role="tabpanel" aria-labelledby="tea-tab">
						<div class="row">
						  @foreach($tea as $te)
							<div class="col-md-4 text-center">
								<div class="menu-wrap">
									<img src="{{ url('assets/uploads/minuman/tea/'.$te->gambar_tea) }}" style="display: block; margin: auto;" class="menu-img img mb-4" alt="">
									<div class="text-center">
										<h3><a href="#">{{ $te->nama_tea }}</a></h3>
										<p class="d-inline-block text-truncate" style="max-width: 150px;">{{ $te->keterangan_tea }}</p>
										<p class="price"><span>{{ $te->harga_tea }}K</span></p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>

					<div class="tab-pane fade" id="choco" role="tabpanel" aria-labelledby="choco-tab">
						<div class="row">
						  @foreach($choco as $co)
							<div class="col-md-4 text-center">
								<div class="menu-wrap">
									<img src="{{ url('assets/uploads/minuman/choco/'.$co->gambar_co) }}" class="menu-img img mb-4" style="display: block; margin: auto;" alt="">
									<div class="text-center">
										<h3><a href="#">{{ $co->nama_co }}</a></h3>
										<p class="d-inline-block text-truncate" style="max-width: 150px;">{{ $co->keterangan_co }}</p>
										<p class="price"><span>{{ $co->harga_co }}K</span></p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>

					<div class="tab-pane fade" id="dalgona" role="tabpanel" aria-labelledby="dalgona-tab">
						<div class="row">
						  @foreach($dalgona as $dg)
							<div class="col-md-4 text-center">
								<div class="menu-wrap">
									<img src="{{ url('assets/uploads/minuman/dalgona/'.$dg->gambar_dg) }}" class="menu-img img mb-4" style="display: block; margin: auto;" alt="">
									<div class="text-center">
										<h3><a href="#">{{ $dg->nama_dg }}</a></h3>
										<p class="d-inline-block text-truncate" style="max-width: 150px;">{{ $dg->keterangan_dg }}</p>
										<p class="price"><span>{{ $dg->harga_dg }}K</span></p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>

					<div class="tab-pane fade" id="bottle" role="tabpanel" aria-labelledby="bottle-tab">
						<div class="row">
						  @foreach($bottle as $bt)
							<div class="col-md-4 text-center">
								<div class="menu-wrap">
									<img src="{{ url('assets/uploads/minuman/bottle/'.$bt->gambar_bt) }}" class="menu-img img mb-4" style="display: block; margin: auto;" alt="">
									<div class="text-center">
										<h3><a href="#">{{ $bt->nama_bt }}</a></h3>
										<p class="d-inline-block text-truncate" style="max-width: 150px;">{{ $bt->keterangan_bt }}</p>
										<p class="price"><span>{{ $bt->harga_bt }}K</span></p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>

					<div class="tab-pane fade" id="brownis" role="tabpanel" aria-labelledby="brownis-tab">
						<div class="row">
						  @foreach($brownis as $br)
							<div class="col-md-4 text-center">
								<div class="menu-wrap">
									<img src="{{ url('assets/uploads/snack/'.$br->gambar_br) }}" class="menu-img img mb-4"style="display: block; margin: auto;" alt="">
									<div class="text-center">
										<h3><a href="#">{{ $br->nama_br }}</a></h3>
										<p class="d-inline-block text-truncate" style="max-width: 150px;">{{ $br->keterangan_br }}</p>
										<p class="price"><span>{{ $br->harga_br }}K</span></p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
@endsection
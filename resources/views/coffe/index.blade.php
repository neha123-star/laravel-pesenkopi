@extends('layouts.appcoffe')

@section('content')

	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url({{ url('assets/coffe/images/bg_2.png')}});">

			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Welcome</span>
						<h1 class="mb-4">sweet and soft coffee ready to be served</h1>
						<p class="mb-4 mb-md-5">Silahkan menikmati hidangan yang telah kami sediakan</p>
						<p><a href="tel:+6282131181285" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order</a> 
							<a href="/menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url({{ url('assets/coffe/images/6.png')}});">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Welcome</span>
						<h1 class="mb-4">sweet and soft coffee ready to be served</h1>
						<p class="mb-4 mb-md-5">Silahkan menikmati hidangan yang telah kami sediakan</p>
						<p><a href="tel:+6282131181285" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order</a> 
							<a href="/menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url({{ url('assets/coffe/images/bg_3.png')}});">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Welcome</span>
						<h1 class="mb-4">sweet and soft coffee ready to be served</h1>
						<p class="mb-4 mb-md-5">Silahkan menikmati hidangan yang telah kami sediakan</p>
						<p><a href="tel:+6282131181285" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order</a> 
							<a href="/menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>1</p>
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

	<section class="ftco-about d-md-flex">
		<div class="one-half img" style="background-image: url({{ url('assets/coffe/images/90.jpeg')}});"></div>
		<div class="one-half ftco-animate">
			<div class="overlap">
				<div class="heading-section ftco-animate ">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Tentang pesenkopi</h2>
				</div>
				<div>
					<p>Sesuai dengan nama kafe kami pesenkopi, di kafe ini kami selalu menyediakan beberapa jenis minuman kopi dan kue, kopiyang kami gunakan berkualitas karena kami juga mengambil biji" kopi yang terbaik jadi tak heran jika banyak sekali pengunjung yang datang sangat suka sekali dengan menu" yang ada di kafe kami, jika anda belum mencobanya silahkan mencoba ya</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-services">
		<div class="container">
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-choices"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Pemesanan Mudah</h3>
							<p>Jika anda mager atau tidak mau keluar, kopi yang ada di kafe kami juga mudah di pesan secara online. Anda dapat memesannya melalui nomor telepon yang sudah tertera di website kami.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-delivery-truck"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Pengantaran Cepat</h3>
							<p>Kami akan mengirim pesanan anda dengan sangat hati" dan pastinya sampai tujuan dengan cepat. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-coffee-bean"></span></div>
						<div class="media-body">
							<h3 class="heading">Kualitas Kopi</h3>
							<p>Anda jangan pernah takut untuk mencoba kopi yang ada di kafe kami karena kami selalu memberikan kopi yang sangat berkualitas</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 pr-md-5">
					<div class="heading-section text-md-right ftco-animate">
						<span class="subheading">Discover</span>
						<h2 class="mb-4">Tentang Menu</h2>
						<p class="mb-4">Di kafe kami menyediakan berbagai menu kopi contohnya : kopi susu creamy, kopi susu caramel, kopi red velvet, cotton candy dan masih banyak yang lainnya anda bisa memilih apa yang anda mau, jika anda ingin memilih makanan kami juga menyediakannya dan di jamin makanan yang ada di kafe kami enak"</p>
						<p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="menu-entry">
								<a href="#" class="img"
									style="background-image: url({{ url('assets/coffe/images/menu/coffekop/americano_peach.jpg')}});"></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="menu-entry mt-lg-4">
								<a href="#" class="img"
									style="background-image: url({{ url('assets/coffe/images/menu/choco/ice_chocolate.jpg')}});"></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="menu-entry">
								<a href="#" class="img"
									style="background-image: url({{ url('assets/coffe/images/menu/tea/ice_thaitea.jpg')}});"></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="menu-entry mt-lg-4">
								<a href="#" class="img"
									style="background-image: url({{ url('assets/coffe/images/menu/coffekop/ice_kopi_susu_strong.jpg')}});"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url({{ url('assets/coffe/images/bg_2.jpg')}});"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon"><span class="flaticon-coffee-cup"></span></div>
									<strong class="number" data-number="100">0</strong>
									<span>Coffee Branches</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon"><span class="flaticon-coffee-cup"></span></div>
									<strong class="number" data-number="85">0</strong>
									<span>Number of Awards</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon"><span class="flaticon-coffee-cup"></span></div>
									<strong class="number" data-number="10567">0</strong>
									<span>Happy Customer</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon"><span class="flaticon-coffee-cup"></span></div>
									<strong class="number" data-number="900">0</strong>
									<span>Staff</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-menu">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Tentang Produk</h2>
					<p>Kami dari pihak pesenkopi akan selalu memberikan produk" makanan dan minuman untuk pengunjung yang datang dengan kualitas yang baik, rasa yang enak, tempat yang nyaman dan masih banyak lagi</p>
				</div>
			</div>
			<div class="row d-md-flex">
				<div class="col-lg-12 ftco-animate p-md-5">
					<div class="row">
						<div class="col-md-12 nav-link-wrap mb-5">
							<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab"
								role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
									role="tab" aria-controls="v-pills-1" aria-selected="false">Miuman</a>

								<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
									aria-controls="v-pills-2" aria-selected="false">Snack</a>
							</div>
						</div>
						<div class="col-md-12 d-flex align-items-center">

							<div class="tab-content ftco-animate" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
									aria-labelledby="v-pills-1-tab">
									<div class="row">
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4"
													style="background-image: url({{ url('assets/coffe/images/menu/coffekop/ice_kopi_susu_strong.jpg')}});"></a>
												<div class="text">
													<h3><a href="#">Ice Kopi Susu Strng</a></h3>
													<p>Minuman dengan rasa kopi yang lebih mendominasi.</p>
													<p class="price"><span>Rp. 10.000</span></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4"
													style="background-image: url({{ url('assets/coffe/images/menu/coffekop/ice_kopi_susu_strawberry.jpg')}});"></a>
												<div class="text">
													<h3><a href="#">Ice Kopi Susu Strowbarry</a></h3>
													<p>Minuman dengan perpaduan kopi dan strowbari.</p>
													<p class="price"><span>Rp. 13.000</span></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4"
													style="background-image: url({{ url('assets/coffe/images/menu/coffekop/ice_kopi_susu_peach.jpg')}});"></a>
												<div class="text">
													<h3><a href="#">Ice Kopi Susu Peach</a></h3>
													<p>Minuman dengan perpaduan kopi dan peach.</p>
													<p class="price"><span>Rp. 13.000</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="v-pills-2" role="tabpanel"
									aria-labelledby="v-pills-2-tab">
									<div class="row">
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4"
													style="background-image: url({{ url('assets/coffe/images/menu/brownis/brownis_waffle_oreo_creamcheese.jpg')}});"></a>
												<div class="text">
													<h3><a href="#">Brownis Waffle Oreo Creamcheese</a></h3>
													<p>Brownis coklat dengan toping creamcheese dan oreo di atasnya.</p>
													<p class="price"><span>Rp. 16.800</span></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4"
													style="background-image: url({{ url('assets/coffe/images/menu/brownis/brownis_waffle_original.jpg')}});"></a>
												<div class="text">
													<h3><a href="#">Brownis Waffle Original</a></h3>
													<p>Brownis rasa coklat original.</p>
													<p class="price"><span>Rp. 9.600</span></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4"
													style="background-image: url({{ url('assets/coffe/images/menu/brownis/pancong_waffe_coklat_keju.jpg')}});"></a>
												<div class="text">
													<h3><a href="#">Brownis Waffle Coklat Keju</a></h3>
													<p>Brownis coklat dengan toping coklat dan Keju di atasnya.</p>
													<p class="price"><span>Rp. 14.400</span></p>
												</div>
											</div>
										</div>
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
@extends('layouts.appcoffe')

@section('content')

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url({{ url('assets/coffe/images/bg_2.png')}});" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">About Us</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="/index">Home</a></span> <span>About</span></p>
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

    

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
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
@endsection
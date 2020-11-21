<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pesen Kopi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/open-iconic-bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/animate.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/owl.theme.default.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/magnific-popup.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/aos.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/ionicons.min.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/bootstrap-datepicker.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/jquery.timepicker.css')); ?>">


	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/flaticon.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/icomoon.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('assets/coffe/css/style.css')); ?>">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/index">pesenkopi.</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="/index" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="/menu" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
					<?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
    <!-- END nav -->
    


    <?php echo $__env->yieldContent('content'); ?>

    <footer class="ftco-footer ftco-section img">
		<div class="overlay"></div>
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Tentang</h2>
						<p>Website ini di buat untuk menunjukan atau mempromosikan kedai pesenkopi dan sekaligus
							mempromosikan pesenkopi.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Jika ada pertanyaan?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><a href="https://goo.gl/maps/mEiQFvdSatKL7vh19"><span
											class="icon icon-map-marker"></span><span class="text">Sisir, Kec. Batu,
											Kota
										</span></a></li>
								<li><a href="tel:+6282131181285"><span class="icon icon-phone"></span><span
											class="text">(+62) 8213 1181 285</span></a></li>
								<li><a href="mailto:neharosma200@gmail.com"><span
											class="icon icon-envelope"></span><span
											class="text">pesenkopi@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> Pesen Kopi <i class="icon-heart" aria-hidden="true"></i>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>


	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	<script src="<?php echo e(url('assets/coffe/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/jquery.easing.1.3.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/jquery.waypoints.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/jquery.stellar.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/jquery.magnific-popup.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/aos.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/jquery.animateNumber.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/bootstrap-datepicker.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/jquery.timepicker.min.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/scrollax.min.js')); ?>"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="<?php echo e(url('assets/coffe/js/google-map.js')); ?>"></script>
	<script src="<?php echo e(url('assets/coffe/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\peesenkopi\resources\views/layouts/appcoffe.blade.php ENDPATH**/ ?>
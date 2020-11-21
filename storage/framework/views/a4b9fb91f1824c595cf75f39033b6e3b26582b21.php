<?php $__env->startSection('content'); ?>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="<?php echo e(url('assets/admin/vendors/images/banner-img.png')); ?>" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue"><?php echo e(Auth::user()->name); ?></div>
						</h4>
						<p class="font-18 max-width-600">Semoga hari anda menyenangkan, dengan masuk ke halaman ini anda dapat menambahkan informasi ke halaman user atau menambahkan data. </p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\peesenkopi\resources\views/admin/index.blade.php ENDPATH**/ ?>
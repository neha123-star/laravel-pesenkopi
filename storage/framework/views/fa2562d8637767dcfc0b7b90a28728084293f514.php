<?php $__env->startSection('content'); ?>

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
						<h4 class="text-blue h4">Edit data Dalgona</h4>
					</div>
				</div>
				<?php $__currentLoopData = $dalgona; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<form method="post" action="<?php echo e(route('dalgona.update',$dg->id)); ?>" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('PUT')); ?>

					<div class="form-group row">
						<label for="nama_dg" class="col-sm-12 col-md-2 col-form-label">Nama</label>
						<div class="col-sm-12 col-md-10">
						<input type="text" name="nama_dg" class="form-control" value="<?php echo e($dg->nama_dg); ?>">
						<?php if($errors->has('nama_dg')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('nama_dg')); ?>

                                </div>
                            <?php endif; ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="harga_dg" class="col-sm-12 col-md-2 col-form-label">Harga</label>
						<div class="col-sm-12 col-md-10">
						<input type="text" name="harga_dg" class="form-control" value="<?php echo e($dg->harga_dg); ?>">
						<?php if($errors->has('harga_dg')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('harga_dg')); ?>

                                </div>
                            <?php endif; ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="gambar_dg" class="col-sm-12 col-md-2 col-form-label">Gambar</label>
						<div class="col-sm-12 col-md-10">
						<input type="file" class="form-control-file form-control height-auto" name="gambar_dg" value="<?php echo e($dg->gambar_dg); ?>">
						<img src="<?php echo e(url('assets/uploads/minuman/kopi/'.$dg->gambar_dg)); ?>" class="img-thumbnail my-2" width="100" height="100" alt="">
						<?php if($errors->has('gambar_dg')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('gambar_dg')); ?>

                                </div>
                            <?php endif; ?>
						
						</div>
					</div>
					<div class="form-group row">
						<label for="keterangan_dg" class="col-sm-12 col-md-2 col-form-label">Keterangan</label>
						<div class="col-sm-12 col-md-10">
						<textarea name="keterangan_dg" class="form-control"><?php echo e($dg->keterangan_dg); ?></textarea>
						<?php if($errors->has('keterangan_dg')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('keterangan_dg')); ?>

                                </div>
                            <?php endif; ?>
						</div>
					</div>

					<div class="form-group text-right">
						<input type="submit" class="btn btn-success" >
					</div>

				</form>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					

					</div>
		</div>
	</div>
	



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\peesenkopi\resources\views/admin/menu/minuman/dalgona/edit.blade.php ENDPATH**/ ?>
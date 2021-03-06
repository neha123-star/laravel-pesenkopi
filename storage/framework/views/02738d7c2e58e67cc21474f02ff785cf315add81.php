<?php $__env->startSection('content'); ?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Menu Coffe</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Menu Minuman</li>
                                <li class="breadcrumb-item active" aria-current="page">Coffe</li>
                            </ol>
                        </nav>
                    </div>
                </div>
			</div>
			<div class="card-box mb-30">
			<a href=" <?php echo e(route('ice.create')); ?>" class="btn btn-primary">Tambah</a>
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
						<?php $__currentLoopData = $kopiice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="table-plus">
							<img src="<?php echo e(url('assets/uploads/minuman/kopi/'.$ki->gambar_koice)); ?>" class="img-thumbnail" width="70" height="70" alt="">
							</td>
							<td><?php echo e($ki->nama_koice); ?></td>
							<td><?php echo e($ki->keterangan_koice); ?></td>
							<td><?php echo e($ki->harga_koice); ?>K</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="<?php echo e(route('ice.edit',$ki->id)); ?>"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="<?php echo e(route('ice.delete',$ki->id)); ?>"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\peesenkopi\resources\views/admin/menu/minuman/kopi/ice/kopi_ice.blade.php ENDPATH**/ ?>
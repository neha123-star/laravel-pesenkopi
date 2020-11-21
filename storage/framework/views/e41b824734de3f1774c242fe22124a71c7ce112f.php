<?php $__env->startSection('content'); ?>
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo e(url('assets/coffe/images/bg_2.png')); ?>);">

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

    <section class="ftco-intro">
      <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
          <div class="info col-lg">
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

    <div id="map"></div>

    
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appcoffe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\peesenkopi\resources\views/coffe/contact.blade.php ENDPATH**/ ?>
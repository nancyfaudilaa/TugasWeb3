

<?php $__env->startSection('content'); ?>
<section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <div class="panel-body">
            <div class="col-lg-12">
            <div class="col-lg-6">
                <blockquote col="col-md-12">
                        <b>BIODATA</b>
                    </blockquote>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            Nama
                        </div>
                        <div class="col-md-8 no-margin">
                            I Nengah Wendiana
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            NIM
                        </div>
                        <div class="col-md-8 no-margin">
                            1815051060
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            Progrma Studi
                        </div>
                        <div class="col-md-8 no-margin">
                            Pendidikan Teknik Informatika
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                 <blockquote col="col-md-12">
                        <b>STUDI KASUS</b>
                    </blockquote>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-2 no-margin">
                            judul
                        </div>
                        <div class="col-md-8 no-margin">
                            Sistem Apotek
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-2 no-margin">
                            penjelasan
                        </div>
                        <div class="col-md-8 no-margin">
                        Sistem manajemen apotek yang bertujuan untuk mempermudah pelanggan mencari obat-obatan
                        </div>
                    </div>
            </div>
            </div>
            <div class="col-lg-12">
            <a href="<?php echo e(route('apotek.create')); ?>">Tambah Data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>#</th><th>NAMA OBAT</th><th>TANGGAL_KADALUARSA</th></tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $obat ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr><td><?php echo e(($in+1)); ?></td><td><?php echo e($val->nama_obat); ?></td><td><?php echo e($val->tanggal_kadaluarsa); ?></td>
                        <td>
                        <a href="<?php echo e(route('apotek.edit',$val->id_obat)); ?>">update</a>
                        <form action="<?php echo e(route('apotek.destroy', $val->id_obat)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        <button type="submit">delete</button>
                        </form>
                        </td></tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($obat ?? ''->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appApotek\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
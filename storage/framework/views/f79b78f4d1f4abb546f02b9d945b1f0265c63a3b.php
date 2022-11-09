


<?php $__env->startSection('title'); ?>
    Dosen Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div>
    <center style="margin-top: 100px"><h1>Meet Our Teacher</h1></center>
</div>   
    <div>
        <center style="margin-top: 20px">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum ullam sed est recusandae dicta nisi omnis delectus illo impedit ipsum reiciendis ipsa consequatur similique porro, aliquid asperiores quae sapiente iste.</p>
        </center>
    </div>

    <div>
        <?php if($MataKuliah != null): ?>
        <div>
            <h2>Daftar Dosen</h2>
            <h3>Nama: <?php echo $nama ?></h3>
            <h3>Kode Dosen:<?php echo  $KodeDosen ?></h3>
        </div>            
        <?php else: ?>
            Daftar dosen tidak ada
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC_1\resources\views/dosen.blade.php ENDPATH**/ ?>
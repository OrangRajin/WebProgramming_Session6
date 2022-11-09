
<?php $__env->startSection('title'); ?>
    Home Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>  
<div style="background-color:powderblue;">   
    <div>
        <center>
            <h2 style="    
        margin: 0 0 10px 0;
        font-size: 38px;
        font-weight: 700;
        color: #000;
        font-family: var(--font-secondary);">Welcome <span>Friends</span> to MySchool</h2>
        </center>
    </div> 
        <div>
            <center style="margin-top: 20px">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum ullam sed est recusandae dicta nisi omnis delectus illo impedit ipsum reiciendis ipsa consequatur similique porro, aliquid asperiores quae sapiente iste.</p>
            </center>
        </div>
</div> 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC_1\resources\views/Home.blade.php ENDPATH**/ ?>
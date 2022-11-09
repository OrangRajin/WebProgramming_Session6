


<?php $__env->startSection('title'); ?>
    Dosen Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div style="background-color:powderblue;">
  <div>
    <center style="margin-bottom: 50px;"><h1>Meet Our Teacher</h1></center>
</div>   
    <div>
        <center style="margin-top: 20px">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum ullam sed est recusandae dicta nisi omnis delectus illo impedit ipsum reiciendis ipsa consequatur similique porro, aliquid asperiores quae sapiente iste. 
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde amet placeat pariatur tempora, expedita numquam maiores harum impedit architecto, sapiente voluptatem doloribus et accusantium odit, consequatur dignissimos rem eveniet quae.
            </p>
        </center>
    </div>
</div>

    <div>
        <div class="card">
            <div class="table-responsive">
              <table class="table table-vcenter card-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Kode Dosen</th>
                    <th>Mata Kuliah</th>
                    <th>Action</th>
                    <th class="w-1"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($teacher->name); ?></td>
                    <td>
                      <?php echo e($teacher->kode_dosen); ?>

                    </td>
                    <td>
                      <?php echo e($teacher->mata_kuliah); ?>

                    </td>
                    <td>
                      <a href="#">View</a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
                </tbody>
              </table>
            </div>
          </div>            
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC_1\resources\views/teachers/dosen.blade.php ENDPATH**/ ?>
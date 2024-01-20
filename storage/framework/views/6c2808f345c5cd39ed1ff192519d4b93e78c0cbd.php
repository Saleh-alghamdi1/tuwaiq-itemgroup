

<?php $__env->startSection('content'); ?>
<div class="container">

  <div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <form action="<?php echo e(route('save')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <label for="Itemgroupsname" class="p-2">ادخل اسم المجموعة</label>
                        <input type="text" class="form-control form-control-sm " name="Itemgroupsname" id="Itemgroupsname">
                        <div class="row">
        
                        <div class="text-center">
                        <button class="btn btn-primary mt-2" type="submit" onclick="showmaseeage">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="card mt-3">
    <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>رقم المجموعة </th>
                            <th>اسم المجموعة </th>
                            <th colspan="2"> اجراء </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($row->id); ?></td>
                            <td><?php echo e($row->Itemgroupsname); ?></td>
                            <td> <a href="<?php echo e(route('del',['x'=>$row->id])); ?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
                            <td> <a href="<?php echo e(route('edit',['x'=>$row->id])); ?>"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Win 10\itemgroup1\resources\views/itemgroup.blade.php ENDPATH**/ ?>
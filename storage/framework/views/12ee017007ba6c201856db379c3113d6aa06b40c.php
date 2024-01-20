

<?php $__env->startSection('content'); ?>
<!----هنا الفورم -->
<div class="container">
  <div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <h4 class="text-center " >العناصر  :</h4>
                    <form action="<?php echo e(route('save-item')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <label for="itemname" class="p-2">ادخل اسم العنصر</label>
                        <input type="text" class="form-control form-control-sm " name="itemname" id="itemname">

                        <label for="price" class="p-2">ادخل سعر العنصر</label>
                        <input type="text" class="form-control form-control-sm " name="price" id="price">

                        <label for="color" class="p-2">اللون  </label>
                        <input type="text" class="form-control form-control-sm " name="color" id="color">

                        <label for="qty" class="p-2">ادخل الكمية </label>
                        <input type="text" class="form-control form-control-sm " name="qty" id="qty">
                        <div class="row">
        
                        <div class="text-center">
                        <button class="btn btn-success mt-2" type="submit" >حفظ</button>
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
                            <th>رقم العنصر </th>
                            <th>اسم العنصر </th>
                            <th> سعر العنصر </th>
                            <th>اللون</th>
                            <th>الكمية </th>
                            <th colspan="2"> اجراء </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> color
                        <tr>
                            <td><?php echo e($row->id); ?></td>
                            <td><?php echo e($row->itemname); ?></td>
                            <td><?php echo e($row->price); ?></td>
                            <td><?php echo e($row->color); ?></td>
                            <td><?php echo e($row->qty); ?></td>
                            <td> <a href="<?php echo e(route('Delitem',['x'=>$row->id])); ?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
                            <td> <a href="<?php echo e(route('Edititem',['x'=>$row->id])); ?>"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Win 10\itemgroup1\resources\views/items.blade.php ENDPATH**/ ?>
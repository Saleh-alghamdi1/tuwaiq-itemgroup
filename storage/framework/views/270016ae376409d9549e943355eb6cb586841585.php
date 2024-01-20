

<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success">تعديل بيانات العنصر :</h1>
        <div class="col mt-3">
            <div class="card ">
                <div class="card-body d-flex justify-content-center">

                    <form action="<?php echo e(route('Updateitem')); ?>" method="post"> 
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                        
                        <label  for="nameitem">اسم العنصر</label>
                        <input type="text" name="nameitem" id="nameitem" value="<?php echo e($item->itemname); ?>">

                        <label for="priceitem">سعر العنصر</label>
                        <input type="text" name="priceitem" id="priceitem" value="<?php echo e($item->price); ?>">

                        <label for="coloritem">اللون </label>
                        <input type="text" name="coloritem" id="coloritem" value="<?php echo e($item->color); ?>">


                        <label for="qtyitem">الكمية </label>
                        <input type="text" name="qtyitem" id="qtyitem" value="<?php echo e($item->qty); ?>">

                        <div class="text-center">
                            <button class="btn btn-success mt-2" type="submit">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Win 10\itemgroup1\resources\views/edititems.blade.php ENDPATH**/ ?>
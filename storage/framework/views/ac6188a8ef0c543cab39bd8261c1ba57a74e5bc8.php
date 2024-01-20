

<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success">تعديل بيانات مجموعات الاصناف</h1>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <form action="<?php echo e(route('update')); ?>" method="post"> 
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                        <label for="namegroup">اسم العنصر</label>
                        <input type="text" name="namegroup" id="namegroup" value="<?php echo e($item->Itemgroupsname); ?>">

                        <div class="text-center">
                            <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Win 10\itemgroup1\resources\views/editgroupitem.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025 = $component; } ?>
<?php $component = App\View\Components\Layoutadmin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layoutadmin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layoutadmin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> cost payment <?php $__env->endSlot(); ?>
     <?php $__env->slot('body', null, []); ?> 

<div class="allcvtable">
<h3 class="text-info text-center">All Cost payment</h3>
<table id="myTable" class="table table-striped" >
        <thead>
          <tr>

            <th>title </th>
            <th>Expance</th>
            <th>Datails</th>
            <th>Payment stutas</th>
            <!-- <th>Massage</th> -->
            <th>Date </th>
            <th>Actions</th>

          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td><?php echo e($value->work); ?></td>
                <td><?php echo e($value->expence); ?></td>
                <td><?php echo e($value->details); ?></td>
                <td><?php echo e($value->paymentstutas); ?></td>
                <!-- <td><?php echo e($value->msg); ?></td> -->
                <td><?php echo e($value->created_at->format('d M Y')); ?></td>
                <div style="" class="edtdeletebtn d-flex">
                    <td>
                        <a href="edit-and-update-cost/<?php echo e($value->id); ?>"><button class="EDBTN btn-info w-60">edit</button></a>


                    </td>
                    </div>


            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e19e419093bef559b4de4407ea32703638ba025)): ?>
<?php $component = $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025; ?>
<?php unset($__componentOriginal0e19e419093bef559b4de4407ea32703638ba025); ?>
<?php endif; ?>
<?php /**PATH J:\pfi\resources\views/PFICOST/allpficost.blade.php ENDPATH**/ ?>
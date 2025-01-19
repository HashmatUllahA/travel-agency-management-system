<?php if (isset($component)) { $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025 = $component; } ?>
<?php $component = App\View\Components\Layoutadmin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layoutadmin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layoutadmin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> all approval <?php $__env->endSlot(); ?>
     <?php $__env->slot('body', null, []); ?> 
       
<div class="allcvtable">
<h3 class="text-info text-center">Approval Records.</h3>
    <table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            
            <th>Name</th>
            <th>Father Name</th>
            <th>Mobile Number</th>
            <th>Passport Number</th>
           
            <th>Actions</th>
          </tr>  
        </thead>  
        <tbody>  
            <?php $__currentLoopData = $approvals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($a->name); ?></td>
                    <td><?php echo e($a->father_name); ?></td>
                    <td><?php echo e($a->mobile_number); ?></td>
                    <td><?php echo e($a->passport_number); ?></td>
                    <div  class="edtdeletebtn d-flex">
                        <td>
                        <a href="<?php echo e(asset($a->file_path)); ?>" target="_blank">
                            <button class="EDBTN btn-info">View</button>
                        </a>
                        </td>
                    </div>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </body>
    </table>
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
<?php endif; ?><?php /**PATH J:\pfi\resources\views/approval/approvalRecord.blade.php ENDPATH**/ ?>
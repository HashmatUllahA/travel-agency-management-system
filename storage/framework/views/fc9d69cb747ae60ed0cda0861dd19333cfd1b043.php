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
  <a href="/app/add-employee">
    <button class="btn btn-info text-white" >+ Employee</button>
  </a>
<h3 class="text-info text-center">Pak feature Employees.</h3>
    <table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            
            <th>image</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Cnic number </th>
            <th>City </th>
            <th>Added date</th>
          </tr>  
        </thead>  
        <tbody>  
          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
              <td><img src="<?php echo e(asset($user->image_path)); ?>" alt="User Image" style="width: 50px; height: 50px;"></td>
                  <td><?php echo e($user->name); ?></td>
                  <td><?php echo e($user->father_name); ?></td>
                  <td><?php echo e($user->email); ?></td>
                  <td><?php echo e($user->mobile_number); ?></td>
                  <td><?php echo e($user->cnic_number); ?></td>
                  <td><?php echo e($user->address); ?></td>
                  <td><?php echo e($user->created_at->format('d M Y')); ?></td> 

              </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </body>
    </table>
<script>

</script>
</html> 
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e19e419093bef559b4de4407ea32703638ba025)): ?>
<?php $component = $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025; ?>
<?php unset($__componentOriginal0e19e419093bef559b4de4407ea32703638ba025); ?>
<?php endif; ?><?php /**PATH J:\pfi\resources\views/Employee/employees.blade.php ENDPATH**/ ?>
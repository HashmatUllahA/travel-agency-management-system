<?php if (isset($component)) { $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025 = $component; } ?>
<?php $component = App\View\Components\Layoutadmin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layoutadmin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layoutadmin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Submit Visa <?php $__env->endSlot(); ?>
     <?php $__env->slot('body', null, []); ?> 
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <?php if(session('status')): ?>
                                <div class="alert alert-success text-center">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            <h3 class="mb-4 text-center text-uppercase text-primary">Submit Visa Details Form</h3>

                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success text-center">
                                    <?php echo e(session()->get('success')); ?>

                                </div>
                            <?php endif; ?>

                            <form action="showform" enctype="multipart/form-data" method="post">
                                <?php echo csrf_field(); ?>
                                <!-- Country & Visa Title -->
                                <div class="row mb-3">
                                    
                                    <div class="col-md-6">
                                        <label class="form-label" for="visa-title">Trade*</label>
                                        <input type="text" id="visa-title" name="title" class="form-control" placeholder="Enter visa title" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="country">Country*</label>
                                        <input type="text" id="country" name="country" class="form-control" placeholder="Enter country name" required />
                                    </div>
                                </div>

                                <!-- Required Persons & Last Date -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="required-persons">Required Persons</label>
                                        <input type="number" id="required-persons" name="requerd" class="form-control" placeholder="Number of required persons" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="last-date">Last Date*</label>
                                        <input type="date" id="last-date" name="lastdate" class="form-control" required />
                                    </div>
                                </div>

                                <!-- Advertisement Image -->
                                <div class="mb-4">
                                    <label class="form-label" for="advertisement-image">Advertisement Image</label>
                                    <input type="file" id="advertisement-image" name="advimg" class="form-control" />
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e19e419093bef559b4de4407ea32703638ba025)): ?>
<?php $component = $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025; ?>
<?php unset($__componentOriginal0e19e419093bef559b4de4407ea32703638ba025); ?>
<?php endif; ?>

<script>
    document.getElementById("submitBtn").addEventListener("click", function(){
      alert("The data is submitted successfully");
    });
</script>
<?php /**PATH J:\pfi\resources\views/VISA/submitvisa.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025 = $component; } ?>
<?php $component = App\View\Components\Layoutadmin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layoutadmin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layoutadmin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Passport Entry <?php $__env->endSlot(); ?>
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

                            <h3 class="mb-4 text-center text-uppercase text-primary">Passport Entry </h3>

                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success text-center">
                                    <?php echo e(session()->get('success')); ?>

                                </div>
                            <?php endif; ?>

                            <form action="/app/submit-passport" enctype="multipart/form-data" method="post">
                                <?php echo csrf_field(); ?>
                                
                                <!-- Full Name & Father Name -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="full-name">Full Name*</label>
                                        <input type="text" id="full-name" name="name" class="form-control" placeholder="enter full name .." required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="father-name">Father's Name*</label>
                                        <input type="text" id="father-name" name="fathername" class="form-control" placeholder="enter father's name .." required />
                                    </div>
                                </div>

                                <!-- Passport No & City -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="passport-no">Passport No*</label>
                                        <input type="text" id="passport-no" name="passportno" class="form-control" placeholder="Enter passport number" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="city">Trade*</label>
                                        <input type="text" id="city" name="trade" class="form-control" placeholder="enter trade.." required />
                                    </div>
                                </div>

                                <!-- Date -->
                                <div class="row mb-3">
                                <div class="col-md-6">
                                        <label class="form-label" for="city">City*</label>
                                        <input type="text" id="city" name="city" class="form-control" placeholder="enter city.." required />
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="submit" class="btn btn-warning btn-lg ms-2">Submit</button>
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
<?php /**PATH J:\pfi\resources\views/PASSPORT/passportEntry.blade.php ENDPATH**/ ?>
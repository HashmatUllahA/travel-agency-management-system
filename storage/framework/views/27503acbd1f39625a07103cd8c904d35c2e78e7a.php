<?php if (isset($component)) { $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025 = $component; } ?>
<?php $component = App\View\Components\Layoutadmin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layoutadmin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layoutadmin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Entry Dashboard <?php $__env->endSlot(); ?>
     <?php $__env->slot('body', null, []); ?> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h3 class="mb-4 text-center text-uppercase text-primary">Resume Registration Form</h3>
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success text-center">
                                    <?php echo e(session()->get('success')); ?>

                                </div>
                            <?php endif; ?>
                            <form action="/app/submit-entry" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="username">Full Name*</label>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="enter full name" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="fathername">Father Name</label>
                                        <input type="text" id="fathername" name="fatherName" class="form-control" placeholder="enter father name" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="trade">Trade</label>
                                        <input type="text" id="trade" name="trade" class="form-control" placeholder="enter trade here.." />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="city">City*</label>
                                        <input type="text" id="city" name="city" class="form-control" placeholder="enter city name" required />
                                    </div>
                                    
                                </div>
                                <div class="row mb-3">
                                <div class="col-md-6">
                                        <label class="form-label" for="contact1">Contact 1*</label>
                                        <input type="text" id="contact1" name="contect1" class="form-control" placeholder="enter primary contact" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="contact2">Contact 2</label>
                                        <input type="text" id="contact2" name="contect2" class="form-control" placeholder="enter secondary contact" />
                                    </div>
                                    
                                    <!-- <div class="col-md-6">
                                        <label class="form-label" for="passport">Passport Status</label>
                                        <select id="passport" name="passport" class="form-select">
                                            <option selected value="Passport present">Passport Present</option>
                                            <option value="No present">No Passport</option>
                                        </select>
                                    </div> -->
                                </div>
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
<?php /**PATH J:\pfi\resources\views/cventry.blade.php ENDPATH**/ ?>
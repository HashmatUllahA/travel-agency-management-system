<?php if (isset($component)) { $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025 = $component; } ?>
<?php $component = App\View\Components\Layoutadmin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layoutadmin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layoutadmin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Dashboard <?php $__env->endSlot(); ?>
     <?php $__env->slot('body', null, []); ?> 
        <section class="section ALLTADA">
            <div class="row">
                <!-- Information about visas -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Information about Visas</h5>
                                <div class="table-responsive">
                                    <table id="visaTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Trade</th>
                                                <th>Country</th>
                                                <th>Required Persons</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $InfoAboutVisas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($info->title); ?></td>
                                                <td><?php echo e($info->country); ?></td>
                                                <td><?php echo e($info->requerd); ?></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total Required Persons:</th>
                                                <td></td>
                                                <td><?php echo e($requerdPersion); ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Today's received payment records -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Received Payment Records</h5>
                            <div class="table-responsive">
                                <table id="receivedPaymentsTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Trade</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $todayRecivedPaiments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recived): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($recived->name); ?></td>
                                            <td><?php echo e($recived->trade); ?></td>
                                            <td><?php echo e($recived->recivepayment); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total Received Payment:</th>
                                            <td></td>
                                            <td><?php echo e($totalRecivedPaymentToday); ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Today's return payment records -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Return Payment Records</h5>
                            <div class="table-responsive">
                                <table id="returnPaymentsTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Trade</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $todayReturnPaiments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $return): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($return->name); ?></td>
                                            <td><?php echo e($return->trade); ?></td>
                                            <td><?php echo e($return->retunpayment); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total Return Payment:</th>
                                            <td></td>
                                            <td><?php echo e($totalReturnPaymentToday); ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Today's cost payment records -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Cost Payment Records</h5>
                            <div class="table-responsive">
                                <table id="returnPaymentsTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $todayCostPaiments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($cost->work); ?></td>
                                            <td><?php echo e($cost->expence); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total Cost Payment:</th>
                                            <td><?php echo e($totalCostPaymentToday); ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recived passport -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Recived Pasports</h5>
                            <div class="table-responsive">
                                <table id="returnPaymentsTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Trade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $todayRecivedPassports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $RecivedP): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($RecivedP->name); ?></td>
                                            <td><?php echo e($RecivedP->trade); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>All Recived Passport:</th>
                                            <td><?php echo e($totalRecivedPassport); ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- return passport -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Count Pasports and Resumes</h5>
                           <p>Today return Passport: <?php echo e($todayReturnPassportsCount); ?></p>
                           <p>All return Passport: <?php echo e($totalReturnPassport); ?></p>
                           <p>Today online Resumes: <?php echo e($todayOnlineResumesResumesCount); ?></p>
                           <p>All Online Resumes: <?php echo e($allOnlineResumesResumes); ?></p>
                           <p>Today recived by hand  Resumes: <?php echo e($todayRecivedByHandResumesCount); ?></p>
                           <p>All recived by hand  Resumes: <?php echo e($allRecivedByHandResumes); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e19e419093bef559b4de4407ea32703638ba025)): ?>
<?php $component = $__componentOriginal0e19e419093bef559b4de4407ea32703638ba025; ?>
<?php unset($__componentOriginal0e19e419093bef559b4de4407ea32703638ba025); ?>
<?php endif; ?>
<?php /**PATH J:\pfi\resources\views/cvsdishbord.blade.php ENDPATH**/ ?>
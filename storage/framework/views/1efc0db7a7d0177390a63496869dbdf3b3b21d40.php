<?php $__env->startSection('content'); ?>

<div id="content-container">
    <div class="pageheader">
        <div id="page-content">
            <div class="panel">

                <div class="panel-heading ">
                    <h3 class="panel-title">User Details

                    </h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="<?php echo e(config('app.baseURL')); ?>/user/update/<?php echo e($user->user_id); ?>" id="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" id="demo-text-input" name="name" class="form-control" placeholder="Name" value="<?php echo e($user->name); ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" id="demo-text-input" name="email" class="form-control" placeholder="Email" value="<?php echo e($user->email); ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="tel" id="demo-text-input" name="contact" class="form-control" placeholder="Contact Number" value="<?php echo e($user->contact); ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" id="demo-text-input" name="city" class="form-control" placeholder="City" value="<?php echo e($user->city); ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input type="file" id="demo-text-input" name="profile_image" class="form-control-xl" placeholder="Enter Profile Image" maxlength="100" value="<?php echo e($user->profile_image); ?>" />
                                    <?php if("<?php echo e(config('app.baseURL')); ?>/storage/app/profile_image/<?php echo e($user->profile_image); ?>"): ?>
                                    <img src= "<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($user->profile_image); ?>" id="profile-img-tag" style="width: 50px;height: 50px;margin-left:194px;margin-top: -36px;"/>
                                    <?php else: ?>
                                    image <input type="file" name="profile_image" value="<?php echo e($user->profile_image); ?>"/>
                                    <?php endif; ?>
                                </div>                            
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control" rowspan="5" colspan="30"><?php echo e($user->address); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="full-name-1">Role</label>
                                    <select class="form-control" name="role" id="role" required/>
                                    <option value="" selected disabled>Select</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3" style="text-align: center; float: right;">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        Submit
                                    </button>           
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#role option[value =<?php echo e($user->role); ?>]").prop("selected",true);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\machine-test\resources\views/user/edit.blade.php ENDPATH**/ ?>
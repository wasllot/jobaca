<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.setting.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.settings.update", [$setting->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('key') ? 'has-error' : ''); ?>">
                <label for="key"><?php echo e(trans('cruds.setting.fields.key')); ?>*</label>
                <input type="text" id="key" name="key" class="form-control" value="<?php echo e(old('key', isset($setting) ? $setting->key : '')); ?>" required>
                <?php if($errors->has('key')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('key')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.setting.fields.key_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('value') ? 'has-error' : ''); ?>">
                <label for="value"><?php echo e(trans('cruds.setting.fields.value')); ?></label>
                <textarea id="value" name="value" class="form-control "><?php echo e(old('value', isset($setting) ? $setting->value : '')); ?></textarea>
                <?php if($errors->has('value')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('value')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.setting.fields.value_helper')); ?>

                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/admin/settings/edit.blade.php ENDPATH**/ ?>
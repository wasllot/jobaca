<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.faq.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.faqs.update", [$faq->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('question') ? 'has-error' : ''); ?>">
                <label for="question"><?php echo e(trans('cruds.faq.fields.question')); ?>*</label>
                <input type="text" id="question" name="question" class="form-control" value="<?php echo e(old('question', isset($faq) ? $faq->question : '')); ?>" required>
                <?php if($errors->has('question')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('question')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.faq.fields.question_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('answer') ? 'has-error' : ''); ?>">
                <label for="answer"><?php echo e(trans('cruds.faq.fields.answer')); ?>*</label>
                <input type="text" id="answer" name="answer" class="form-control" value="<?php echo e(old('answer', isset($faq) ? $faq->answer : '')); ?>" required>
                <?php if($errors->has('answer')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('answer')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.faq.fields.answer_helper')); ?>

                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/admin/faqs/edit.blade.php ENDPATH**/ ?>
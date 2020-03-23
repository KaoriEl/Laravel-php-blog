<?php $__env->startSection('content'); ?>

<div class="container">

  <?php $__env->startComponent('admin.components.breadcrumb'); ?>
    <?php $__env->slot('title'); ?> Редактирование новости <?php $__env->endSlot(); ?>
    <?php $__env->slot('parent'); ?> Главная <?php $__env->endSlot(); ?>
    <?php $__env->slot('active'); ?> Новости <?php $__env->endSlot(); ?>
  <?php echo $__env->renderComponent(); ?>

  <hr />

  <form class="form-horizontal" action="<?php echo e(route('admin.article.update', $article)); ?>" method="post">
    <input type="hidden" name="_method" value="put">
    <?php echo e(csrf_field()); ?>


    
    <?php echo $__env->make('admin.articles.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <input type="hidden" name="modified_by" value="<?php echo e(Auth::id()); ?>">
  </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
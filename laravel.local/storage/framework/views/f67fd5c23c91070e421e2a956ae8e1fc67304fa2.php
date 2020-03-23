<?php $__env->startSection('content'); ?>

<div class="container">

  <?php $__env->startComponent('admin.components.breadcrumb'); ?>
    <?php $__env->slot('title'); ?> Список новостей <?php $__env->endSlot(); ?>
    <?php $__env->slot('parent'); ?> Главная <?php $__env->endSlot(); ?>
    <?php $__env->slot('active'); ?> Новости <?php $__env->endSlot(); ?>
  <?php echo $__env->renderComponent(); ?>

  <hr>

  <a href="<?php echo e(route('admin.article.create')); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать новость</a>
  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
          <td><?php echo e($articles->title); ?></td>
          <td><?php echo e($articles->published); ?></td>
          <td class="text-right">
            <form onsubmit="if(confirm('Удалить?')){ return true } else { return false }" action="<?php echo e(route('admin.article.destroy', $articles)); ?>"  method="post">
              <input type="hidden" name="_method" value="DELETE">
              <?php echo e(csrf_field()); ?>


              <a href="<?php echo e(route('admin.article.edit', $articles)); ?>"><i class="fa fa-edit"></i></a>

              <button type="submit" class="btn"><i class="fa fa-trash-o"> </i></button>

            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
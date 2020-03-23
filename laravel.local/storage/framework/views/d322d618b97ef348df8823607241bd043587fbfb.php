<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <option value="<?php echo e(isset($category_list->id) ? $category_list->id : ""); ?>"

    <?php if(isset($category->id)): ?>

      <?php if($category->parent_id == $category_list->id): ?>
        selected=""
      <?php endif; ?>

      <?php if($category->id == $category_list->id): ?>
        hidden=""
      <?php endif; ?>

    <?php endif; ?>

    >
    <?php echo isset($delimiter) ? $delimiter : ""; ?><?php echo e(isset($category_list->title) ? $category_list->title : ""); ?>

  </option>

  <?php if(count($category_list->children) > 0): ?>

    <?php echo $__env->make('admin.categories.partials.categories', [
      'categories' => $category_list->children,
      'delimiter'  => ' - ' . $delimiter
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

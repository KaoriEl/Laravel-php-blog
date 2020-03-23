<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <option value="<?php echo e(isset($category->id) ? $category->id : ""); ?>"

    <?php if(isset($article->id)): ?>
      <?php $__currentLoopData = $article->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($category->id == $category_article->id): ?>
          selected="selected"
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    >
    <?php echo isset($delimiter) ? $delimiter : ""; ?><?php echo e(isset($category->title) ? $category->title : ""); ?>

  </option>

  <?php if(count($category->children) > 0): ?>

    <?php echo $__env->make('admin.articles.partials.categories', [
      'categories' => $category->children,
      'delimiter'  => ' - ' . $delimiter
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

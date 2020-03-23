<label for="">Статус</label>
<select class="form-control" name="published">
  <?php if(isset($category->id)): ?>
    <option value="0" <?php if($category->published == 0): ?> selected="" <?php endif; ?>>Не опубликовано</option>
    <option value="1" <?php if($category->published == 1): ?> selected="" <?php endif; ?>>Опубликовано</option>
  <?php else: ?>
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  <?php endif; ?>
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="<?php echo e($category->title ?? ""); ?>" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="<?php echo e($category->slug ?? ""); ?>" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
  <option value="0">-- без родительской категории --</option>
  <?php echo $__env->make('admin.categories.partials.categories', ['categories' => $categories], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">

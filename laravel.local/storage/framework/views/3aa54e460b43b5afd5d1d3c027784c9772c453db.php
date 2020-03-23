<label for="">Статус</label>
<select class="form-control" name="published">
  <?php if(isset($article->id)): ?>
    <option value="0" <?php if($article->published == 0): ?> selected="" <?php endif; ?>>Не опубликовано</option>
    <option value="1" <?php if($article->published == 1): ?> selected="" <?php endif; ?>>Опубликовано</option>
  <?php else: ?>
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  <?php endif; ?>
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="<?php echo e(isset($article->title) ? $article->title : ""); ?>" required>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="<?php echo e(isset($article->slug) ? $article->slug : ""); ?>" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
  <?php echo $__env->make('admin.articles.partials.categories', ['categories' => $categories], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</select>

<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short"><?php echo e(isset($article->description_short) ? $article->description_short : ""); ?></textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description"><?php echo e(isset($article->description) ? $article->description : ""); ?></textarea>

<hr />

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="<?php echo e(isset($article->meta_title) ? $article->meta_title : ""); ?>">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="<?php echo e(isset($article->meta_description) ? $article->meta_description : ""); ?>">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="<?php echo e(isset($article->meta_keyword) ? $article->meta_keyword : ""); ?>">

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">

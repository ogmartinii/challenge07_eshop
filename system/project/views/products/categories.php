<div class="categories">
<h3>Our catalogue</h3>
<ul>
<?php foreach($category_list as $category) : ?>
<a href="<?php echo $category->getUrl(); ?>">
<?php echo '<li>'
. $category->category_name
. '</li>' ?>
</a>
<?php endforeach; ?>
</ul>
</div>
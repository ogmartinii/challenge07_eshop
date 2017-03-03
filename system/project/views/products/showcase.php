<h2>HOT</h2>
<div class="products-showcase">
    <?php foreach($showcase as $item) : ?>
    <a href="<?php echo $item->getUrl(); ?>">
    <?php echo $item->name . '<br>'; ?>
    </a>
    <?php endforeach; ?>
</div>
<div class="categories-list">
    <h2>Our catalogue:</h2>
    <div class="categories">
    <ul>
        <?php foreach($categories as $item) : ?>
            <li>
                <a href="<?php echo $item->getUrl(); ?>">
                <?php echo $item->category_name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>
</div>
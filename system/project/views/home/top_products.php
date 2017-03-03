<div class="top-products">
    <h2>OG Products</h2>
    <ul>
        <?php foreach($products as $product) : ?>
            <li>
                <a href="<?php echo $product->getUrl(); ?>">
                    <?php echo $product->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="product">
   <h2><?php echo $product->name; ?></h2>
   <?php foreach($img_file as $img) : ?>
   <img src="img/<?php echo $img->filename; ?>">
   <p><?php echo $product->description ?></p>
   <div class="price_button">
   <h3 id="price"><?php echo '<p>'.$product->price . ' Kč</p>'; ?></h3>
   <form action="" method="post">
   <input type="hidden" name="id" value="<?php echo $product->id; ?>">
   <input type="submit" value="Add to cart">
   </form>
   </div>
   <?php endforeach; ?>
</div>
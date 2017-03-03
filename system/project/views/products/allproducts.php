<div class="catalogue">
<?php foreach($catalogue as $item) : ?>
<a href="<?php echo $item->getUrl(); ?>">
<?php echo $item->name; ?>
</a>
<?php echo '<br>'
. $item->price
. ' Kč'
. '<br>'
. $item->amount_in_stock . '<br>'; ?>
<?php endforeach; ?>


</div>
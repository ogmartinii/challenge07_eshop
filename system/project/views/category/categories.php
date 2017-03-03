<div class="categories">
<?php foreach($items as $item) : ?>
<a href="<?php echo $item->getUrl(); ?>">
<?php echo $item->name; ?>
</a> 
<br>
<?php echo $item->price . '<br>'
. 'Qty in stock: '
. $item->amount_in_stock . '<br>' ?>

<?php endforeach; ?>
</div>
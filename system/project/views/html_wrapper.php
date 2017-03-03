<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?> | <?php echo config::get('site_title'); ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
</head>
<body>
    <div class="content">
    
    <?php echo $top_navigation; ?>

    <?php echo $page_layout; ?>

    <?php echo $footer; ?>
    </div>
</body>
</html>
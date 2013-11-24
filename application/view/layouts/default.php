<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->renderPartial('headermeta'); ?>
</head>

<body>

	<?php $this->renderPartial('navbar'); ?>

<div class="container">
    <h1><?php echo $this->getPagetitle(); ?></h1>

    <?php $this->getContent(); ?>
    <hr>

    <?php $this->renderPartial('footer'); ?>
</div>

</body>
</html>
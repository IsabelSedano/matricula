<?php
    require '../views/header.php';
?>
<div id="content">

<h1>ERROR  <?php echo $e->getCode(); ?> </h1>
<?php echo $e->getMessage(); ?>

</div>

<?php
    require '../views/footer.php';
?>

<?php
    require '../views/header.php';
?>
<div id="content">
<h1>Alta de estudio</h1>
<form method="post" action="/estudio/update">
    <label>Id</label>
    <input type="text" name="id" readonly="readonly" value="<?php echo $row['id']; ?>"> <br>
    <label>Codigo</label>
    <input type="text" name="codigo" value="<?php echo $row['codigo']; ?>"> <br>
    <label>Titulo</label>
    <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>"> <br>
    <label>Abreviatura</label>
    <input type="text" name="abreviatura" value="<?php echo $row['abreviatura']; ?>"> <br>
    <label></label>
    <input type="submit" name="Enviar">
</form>
</div>

<?php
    require '../views/footer.php';
?>

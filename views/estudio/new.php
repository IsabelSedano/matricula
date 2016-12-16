<?php
    require '../views/header.php';
?>
<div id="content">
<h1>Alta de estudio</h1>
<form method="post" action="/estudio/insert">
    <label>Codigo</label>
    <input type="text" name="codigo"> <br>
    <label>Titulo</label>
    <input type="text" name="titulo"> <br>
    <label>Abreviatura</label>
    <input type="text" name="abreviatura"> <br>
    <label></label>
    <input type="submit" name="Enviar">
</form>
</div>

<?php
    require '../views/footer.php';
?>

<?php
    require '../views/header.php';
?>
<div id="content">
    <h1>Lista de estudios</h1>
    <p>
        <a href="/estudio/new">Alta estudio</a>
    </p>
    <table>
        <?php foreach ($rows as $i => $row) : ?>
            <?php if ($i == 0) : ?>
                <thead>
                <tr>
                <?php foreach ($row as $key => $value) : ?>
                    <th> <?php echo $key ?> </th>
                <?php endforeach ?>
                <th>Acción</th></tr>
                </thead>
                <tbody>
            <?php endif ?>


            <tr>
                <?php foreach ($row as $key => $value) : ?>
                    <td> <?php echo $value ?> </td>
                <?php endforeach ?>
                <?php
                    echo "<td> <a href='/estudio/delete/$row[id]'>borrar</a> ";
                    echo " <a href='/estudio/edit/$row[id]'>editar</a> </td>";
                ?>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <p>
        <a href="/estudio/new">Alta estudio</a>
    </p>
</div>

<?php
    require '../views/footer.php';
?>

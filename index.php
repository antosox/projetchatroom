<?php
$titre = "Liste des Triangles";

include_once 'header.php';
?>

<h1><?php echo $titre ?></h1>

<?php
$triangles = Triangle::getTriangles();
?>
<table class="table">
    <tr>
        <th>id</th>
        <th>Triangle</th>
        <th></th>
    </tr>

    <?php
    foreach ($triangles as $tri) {
        ?>
        <tr>
            <td><?php echo $tri->getId() ?></td>
            <td><?php echo $tri ?></td>
            <td>
                <a href="modifierTriangle.php" class="btn btn-success glyphicon glyphicon-pencil"></a>
                <a onclick="return confirm('Etes-vous sûr de vouloir supprimer ce triangle ?')" 
                   href="supprimerTriangle.php" class="btn btn-danger glyphicon glyphicon-remove"></a>
            </td>
        </tr>
    <?php } ?>
</table>
<a href="nouveauTriangle.php" class="btn btn-primary">Nouveau triangle</a>
<?php
include_once 'footer.php';

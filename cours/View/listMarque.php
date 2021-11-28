<h2>Liste des Marques</h2>

<table>
    <tr style="border-bottom : solid white 2px;">
        <td>id</td>
        <td>Marque</td>
        <td>Operation</td>
    </tr>
    <?php foreach ($data as $item){ ?>
    <tr>
        <td style="text-align: center;"><?php echo $item->id; ?></td>
        <td style="text-align: center;"><?php echo $item->nom; ?></td>
        <td style="text-align: center;">
            <button><a href="?route=deleteMarque&id=<?php echo $item->id; ?>">delete</a></button>
            <button><a href="?route=modifyfenMarque&id=<?php echo $item->id; ?>">Modifier</a></button>
        </td>
    </tr>
    <?php } ?>
</table>
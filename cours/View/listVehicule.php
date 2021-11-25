<h2>Liste des vehicules</h2>

<table>
    <tr style="border-bottom : solid white 2px;">
        <td>id</td>
        <td>Modele</td>
        <td>Couleur</td>
        <td>Nb. Portes</td>
        <td>Action</td>
    </tr>
    <?php foreach ($data as $item){ ?>
    <tr>
        <td style="text-align: center;"><?php echo $item->id; ?></td>
        <td style="text-align: center;"><?php echo $item->modele; ?></td>
        <td style="text-align: center;"><?php echo $item->couleur; ?></td>
        <td style="text-align: center;"><?php echo $item->nbporte; ?></td>
        <td style="text-align: center;">
            <button><a href="?route=deleteVehicule&id=<?php echo $item->id; ?>">delete</a></button>
            <button><a href="?route=modifyfenVehicule&id=<?php echo $item->id; ?>">Modifier</a></button>
        </td>
    </tr>
    <?php } ?>
</table>


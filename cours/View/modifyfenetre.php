
<div class="formModify">
    <form method="get">
        <p>modele : <input name="modele" type="text" value="<?php echo $data->modele ?>"></p>
        <p>couleur : <input name="couleur" type="text" value="<?php echo $data->couleur ?>"></p>
        <p>nb porte : <input name="nbporte" type="text" value="<?php echo $data->nbporte ?>"></p>
        <button type="submit">
            <a href="?route=modifyVehicule&id=<?php echo $item->id; ?>&modele=">Modifier</a>
        </button>
    </form>
</div>
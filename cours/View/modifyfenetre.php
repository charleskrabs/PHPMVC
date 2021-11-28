
<div class="formModify">
    <form action="?route=modifyVehicule&id=<?php echo $data->id; ?>" method="POST">
        <p>modele : <input name="modele" type="text" value="<?php echo $data->modele ?>"></p>
        <p>couleur : <input name="couleur" type="text" value="<?php echo $data->couleur ?>"></p>
        <p>nb porte : <input name="nbporte" type="text" value="<?php echo $data->nbporte ?>"></p>
        <button type="submit">
            Modifier
        </button>
    </form>
</div>
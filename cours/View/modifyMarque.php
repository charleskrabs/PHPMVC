<div class="formModifyMarque">
    <form action="?route=modifyMarque&id=<?php echo $data->id; ?>" method="POST">
        <p>modele : <input name="nom" type="text" value="<?php echo $data->nom ?>"></p>
        <button type="submit">
            Modifier
        </button>
    </form>
</div>
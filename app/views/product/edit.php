
<h2>Редагування</h2>

<?php
$product =  $this->get('product');
?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>
        <input name="sku">
        ID товару
    </label>
    </br>
    <label>
        <input name="name">
        Назва товару

    </label>
    </br>
    <label>
        <input name="price" type="number" step="0.01" min="0" value="0">
        Ціна товару
    </label>
    </br>
    <label>
        <input name="qty" type="number" step="0.001" min="0" value="1">
        Кількість товару

    </label>
    </br>
    <label>
        </br>
        <textarea name="description" cols="20" rows="5"> </textarea>
        Опис товару
    </label>
    </br>
    <input type="submit" value="Змінити">
</form>

<p>
    <?= \Core\Url::getLink('/product/list', '<- Повернутись'); ?>
</p>
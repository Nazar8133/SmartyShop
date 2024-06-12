<form method="post" action="delTovar.php">
    <h2>Ви дійсно хочете видалити цей товар - {$name}</h2><br>
    <input type="radio" name="del" value="Yes" checked>Так
    <input type="radio" name="del" value="No">Ні
    <input type="submit" name="knopka" value="Підтвердити"><br>
    <input type="hidden" name="id" value="{$id}">
</form>
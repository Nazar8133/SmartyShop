<form method="post" action="delBrend.php">
    <h2>Ви дійсно хочете видалити даний бренд - {$name}</h2>
    <input type="radio" name="del" value="Yes" checked>Так
    <input type="radio" name="del" value="No">Ні
    <input type="submit" name="knopka" value="Підтвердити"><br>
    <input type="hidden" name="id" value="{$id}">
</form>
<form action="delPhoto.php" method="post">
    <h3>Ви дійсно хочете видалити це фото - <img src='../images/{$fileName}' width="200px"></h3>
    <input type="radio" name="del" value="Yes" checked>Так
    <input type="radio" name="del" value="No">Ні
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="idTovar" value="{$idTovar}">
    <input type="hidden" name="fileName" value="{$fileName}">
    <input type="submit" name="knopka" value="Видалити">
</form>
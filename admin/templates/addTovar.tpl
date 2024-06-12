<form  action="addTovar.php" method="post" enctype="multipart/form-data">
    <label>Додати metaTitle</label><br>
    <input type="text" name="metaTitle"><br>
    <label>Додати metaDiscription</label><br>
    <input type="text" name="metaDiscription"><br>
    <label>Додати metaKeywords</label><br>
    <input type="text" name="metaKeywords"><br>
    <label>Додати title</label><br>
    <input type="text" name="title"><br>
    <label>Додати ціну товару</label><br>
    <input type="number" name="price"><br>
    <label>Оберіть марку кросівок</label><br>
    <select name="idBrend"><br>
    {section loop=$brend name=i}
        <option value={$brend[i].id}>{$brend[i].name}</option>
        {/section}
    </select><br>
    <label>Додайте кількість товару</label><br>
    <input type="number" name="kolvo"><br>
    <label>Додайте характеристику товару</label><br>
    <textarea name="har"></textarea><br>
    <label>Додати дату виготовлення товару</label><br>
    <input type="date" name="data"><br>
    <label>Додати фото товару</label><br>
    <input type="file" name="photo[]" multiple><br>
    <input type="submit" name="knopka" value="Додати"><br>
</form>
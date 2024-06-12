<form method="get" action="indexTovar.php">
<label>Оберіть марку кровісов</label><br>
<select name="idBrend">
    <option value="0">Показати всі</option>
    {section loop=$brend name=i}
    <option value={$brend[i].id} {if isset($idBrend) && $idBrend==$brend[i].id} selected {/if}>{$brend[i].name}</option>
    {/section}
</select>
<input type="submit" name="knopka" value="Шукати">
</form>
<br>
<table border="1">
    <tr>
        <th>№</th>
        <th>Фото товару</th>
        <th>Назва товару</th>
        <th colspan="2">Управління</th>
    </tr>
    {section loop=$tovar name=i}
        <tr>
        <th>{$tovar[i].number}</th>
        <th><img src='../images/{$tovar[i].photo}' width="200px"></th>
        <th>{$tovar[i].name}</th>
        <th><a href="updateTovar.php?id={$tovar[i].id}">Редагування</a></th>
        <th><a href="delTovar.php?id={$tovar[i].id}&name={$tovar[i].name}">Видалення</a></th>
        </tr>
    {/section}
</table>
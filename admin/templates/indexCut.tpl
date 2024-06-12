<table border="1">
    <tr>
        <th>№</th>
        <th>Назва</th>
        <th colspan="2">Управління</th>
    </tr>
    {section loop=$brend name=i}
    <tr>
        <th>{$brend[i].number}</th>
        <th>{$brend[i].name}</th>
        <th><a href="updateBrend.php?id={$brend[i].id}&name={$brend[i].name}">Редагувати</a></th>
        <th><a href="delBrend.php?id={$brend[i].id}&name={$brend[i].name}">Видалити</a></th>
    </tr>
    {/section}
</table>
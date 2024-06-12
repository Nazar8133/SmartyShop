<table border="1">
    <tr>
    <th>№</th>
    <th>Назва сторінки</th>
    <th>Управління</th>
    </tr>
    {section loop=$page name=i}
        <tr>
            <th>{$page[i].number}</th>
            <th>{$page[i].name}</th>
            <th><a href="updatePage.php?id={$page[i].id}">Редагувати</a></th>
        </tr>
    {/section}
</table>
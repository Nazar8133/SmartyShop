<table border="1">
        <tr>
            <th>№</th>
            <th>ПІБ</th>
            <th>Кількість куплених пар кросівок</th>
        </tr>
    {section loop=$infoKlient name=i}
        <tr>
            <th>{$infoKlient[i].number}</th>
            <th><a href="showOrderKlient.php?idKlient={$infoKlient[i].idKlient}">{$infoKlient[i].pib}</a></th>
            <th>{$infoKlient[i].kolvoKlient}</th>
        </tr>
    {/section}
</table>

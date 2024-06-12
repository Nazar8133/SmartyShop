<table border="1">
        <tr>
            <th colspan="2">ПІБ</th>
            <th colspan="2">Email</th>
            <th>Номер телефону</th>
        </tr>
        <tr>
            <th colspan="2">{$pib}</th>
            <th colspan="2">{$email}</th>
            <th>{$number}</th>
        </tr>

        <tr>
            <th>Фото</th>
            <th>Назва товару</th>
            <th>Опис товару</th>
            <th>Ціна</th>
            <th>Кількість замовленого товару</th>
        </tr>
    {section loop=$showOrderKlient name=i}
        <tr>
            <th><img src='../images/{$showOrderKlient[i].photo}' width="200px"></th>
            <th>{$showOrderKlient[i].metaTitle}</th>
            <th>{$showOrderKlient[i].har}</th>
            <th>{$showOrderKlient[i].price}</th>
            <th>{$showOrderKlient[i].orderKolvo}</th>
        </tr>
    {/section}
</table>
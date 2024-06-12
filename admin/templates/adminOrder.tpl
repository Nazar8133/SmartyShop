<table border="1">
    {section loop=$adminOrder name=i}
    {if $adminOrder[i].idKlient!=$adminOrder[i].chengKlient || $adminOrder[i].dataOrder!=$adminOrder[i].chengData}
        <tr>
            <th>№</th>
            <th>ПІБ</th>
            <th>Номер телефону</th>
            <th>Електронна пошта</th>
            <th>Адреса клієнта</th>
            <th>Коментарій до замовлення</th>
            <th>Дата замовлення</th>
            <th colspan="2">Управління замовленням</th>
        </tr>
        <tr>
            <th>{$adminOrder[i].number}</th>
            <th>{$adminOrder[i].pib}</th>
            <th>{$adminOrder[i].telefon}</th>
            <th>{$adminOrder[i].email}</th>
            <th>{$adminOrder[i].adres}</th>
            <th>{$adminOrder[i].koment}</th>
            <th>{$adminOrder[i].dataOrder}</th>
            <th><a href="ranOrder.php?idKlient={$adminOrder[i].idKlient}&data={$adminOrder[i].dataOrder}">Виконати</a></th>
            <th><a href="delOrder.php?idKlient={$adminOrder[i].idKlient}&data={$adminOrder[i].dataOrder}">Видалити замовлення</a></th>
        </tr>
        <tr>
            <th colspan="3">Фото</th>
            <th>Модель</th>
            <th>Ціна</th>
            <th>Кількість замовленого товару клієнта</th>
            <th colspan="3">Вартість</th>
        </tr>
    {/if}
    <tr>
        <th colspan="3"><img src='../images/{$adminOrder[i].photo}' width="200px"></th>
        <th>{$adminOrder[i].metaTitle}</th>
        <th>{$adminOrder[i].price}</th>
        <th>{$adminOrder[i].kolvoOrder}</th>
        <th colspan="3">{$adminOrder[i].vartist}</th>
    </tr>
    {if $adminOrder[i].rowsCount==$adminOrder[i].klientRows}
        <tr>
            <th colspan="6">Вартість всього замовлення:</th>
            <th colspan="3">{$adminOrder[i].ollOrder}</th>
        </tr>
    {/if}
    {/section}
</table>
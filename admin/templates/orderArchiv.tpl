<table border="1">
{section loop=$orderArchiv name=i}
    {if $orderArchiv[i].idKlient!=$orderArchiv[i].chengKlient || $orderArchiv[i].dataOrder!=$orderArchiv[i].chengData}
    <tr>
        <th>№</th>
        <th>ПІБ</th>
        <th>Номер телефону</th>
        <th>Електронна пошта</th>
        <th>Адреса клієнта</th>
        <th>Коментарій до замовлення</th>
        <th>Дата Замовлення</th>
        <th>Відновити замовлення</th>
    </tr>
    <tr>
        <th>{$orderArchiv[i].number}</th>
        <th>{$orderArchiv[i].pib}</th>
        <th>{$orderArchiv[i].nomer}</th>
        <th>{$orderArchiv[i].email}</th>
        <th>{$orderArchiv[i].adres}</th>
        <th>{$orderArchiv[i].koment}</th>
        <th>{$orderArchiv[i].dataOrder}</th>
        <th><a href="vostanOrder.php?idKlient={$orderArchiv[i].idKlient}&dataOrder={$orderArchiv[i].dataOrder}">Відновити</a></th>
    </tr>
    <tr>
        <th colspan="3">Фото</th>
        <th>Модель</th>
        <th>Ціна</th>
        <th>Кількість замовленого товару</th>
        <th colspan="2">Вартість</th>
    </tr>
    {/if}
    <tr>
        <th colspan="3"><img src='../images/{$orderArchiv[i].photo}' width="200px"></th>
        <th>{$orderArchiv[i].metaTitle}</th>
        <th>{$orderArchiv[i].price}</th>
        <th>{$orderArchiv[i].orderKolvo}</th>
        <th colspan="2">{$orderArchiv[i].vartist}</th>
    </tr>
    {if $orderArchiv[i].klientRows==$orderArchiv[i].rowsCount}
        <tr>
            <th colspan="6">Вартість всього замовлення</th>
            <th colspan="2">{$orderArchiv[i].ollOrder}</th>
        </tr>
    {/if}
{/section}
</table>
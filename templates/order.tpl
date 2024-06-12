<form action="order.php" method="post">
<h3>Кошик товарів</h3>

<table class="table table-bordered product-table">
    <thead>
    <tr>
        <th>Фото</th>
        <th>Модель</th>
        <th>Кількість</th>
        <th>Ціна</th>
        <th>Вартість</th>
    </tr>
    </thead>
    <tbody>
    {section loop=$tovar name=i}
    <tr>
        <td><img class="product-image" src="/images/{$tovar[i].photo}" alt=""/></td>
        <td>{$tovar[i].metaTitle}</td>
        <td>
            <div class="input-append">
                <input class="span1 quantity-input" placeholder="1" id="appendedInputButtons" size="16" type="text" name="kolvo{$tovar[i].id}" min="1" max="{$tovar[i].skladKilk}" value="{$tovar[i].kolvo}">
                <a href="/basket.php?id={$tovar[i].id}&mode=del&script=order" class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></a>
            </div>
        </td>
        <td>{$tovar[i].price}</td>
        <td>{$tovar[i].kilk}</td>
    </tr>
    {/section}
    <tr>
        <th colspan="3"><a class="btn" href="/basket.php?mode=clear">Очистити</a></th>
        <th colspan="2"><input class="btn" type="submit" name="btn" value="Перерахувати"></th>
    </tr>
    <tr>
        <td colspan="4" style="text-align:right"><strong>Загальна вартість:</strong></td>
        <td class="label label-important" style="display:block"><strong>{$zahKilk}</strong></td>
    </tr>
    </tbody>
</table>

<br>
<a href="catalog.php" class="btn btn-large"><i class="icon-arrow-left"></i> Назад </a>
<a href="/order2.php" class="btn btn-large pull-right">Продовжити замовлення   <i class="icon-arrow-right"></i></a>
</form>
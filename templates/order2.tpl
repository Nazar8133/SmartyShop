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
    {section loop=$zakaz name=i}
        <tr>
            <td><img class="product-image" src="/images/{$zakaz[i].photo}" alt=""/></td>
            <td>{$zakaz[i].metaTitle}</td>
            <td>{$zakaz[i].kolvo}</td>
            <td>{$zakaz[i].price}</td>
            <td>{$zakaz[i].vart}</td>
        </tr>
    {/section}
    <tr>
        <td colspan="4" style="text-align:right"><strong>Загальна вартість:</strong></td>
        <td class="label label-important" style="display:block"><strong>{$zahVart}</strong></td>
    </tr>
    </tbody>
</table>

<br>
<div class="row">
    <div class="span4">
        <div class="well">
            <h5>Для нових користувачів</h5>
            <form method="post" action="registr.php">
                <div class="control-group">
                    <label class="control-label">Створіть логін</label>
                    <div class="controls">
                        <input class="span3" type="text" placeholder="Логін" name="login" {if isset($login) && !empty($login)}value="{$login}"{/if}>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Створіть пароль</label>
                    <div class="controls">
                        <input class="span3" type="password" placeholder="Пароль" name="password1">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Повторіть пароль</label>
                    <div class="controls">
                        <input class="span3" type="password" placeholder="Пароль" name="password2">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Введіть ПІБ</label>
                    <div class="controls">
                        <input class="span3" type="text" placeholder="ПІБ" name="pib" {if isset($pib) && !empty($pib)}value="{$pib}"{/if}>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Введіть номер телефону</label>
                    <div class="controls">
                        <input class="span3" type="number" placeholder="Номер" name="number" {if isset($number) && !empty($number)}value="{$number}"{/if}>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Введіть email</label>
                    <div class="controls">
                        <input class="span3" type="email" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Введіть адресу</label>
                    <div class="controls">
                        <textarea class="span3" placeholder="Адреса" name="adres">{if isset($adres) && !empty($adres)}{$adres}{/if}</textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Добавте ваш коментарій(Необовязково)</label>
                    <div class="controls">
                        <textarea class="span3" placeholder="Коментар" name="koment">{if isset($koment) && !empty($koment)}{$koment}{/if}</textarea>
                    </div>
                </div>
                <div class="controls">
                    <input class="btn" type="submit" name="knopka" value="Зареєструватись та замовити">
                </div>
            </form>
        </div>
    </div>
    <div class="span1"> &nbsp;</div>
    <div class="span4">
        <div class="well">
            <h5>Для зареэстрованих користувачів</h5>
            <form method="post" action="login.php">
                <div class="control-group">
                    <label class="control-label">Логін</label>
                    <div class="controls">
                        <input class="span3"  type="text" placeholder="Логін" name="login">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Пароль</label>
                    <div class="controls">
                        <input type="password" class="span3" placeholder="Пароль" name="password">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Коментар до замовлення(Необовязково)</label>
                    <div class="controls">
                        <textarea class="span3" name="koment" placeholder="Коментар"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input class="btn" type="submit" name="knopka" value="Ввійти"><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
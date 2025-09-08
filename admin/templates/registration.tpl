<form action="registration.php" method="post" enctype="multipart/form-data">
    <label>Добавте імя користувача</label><br>
    <input type="text" name="name" {if isset($name)} value="{$name}" {/if}><br>
    <label>Добавити роль</label><br>
    <select name="rule">
        <option value="1" selected>Оператор</option>
        <option value="2">Адміністратор</option>
    </select><br>
    <label>Добавте аватар</label><br>
    <input type="file" name="avatar"><br>
    <label>Добавте email</label><br>
    <input type="email" name="email"><br>
    <label>Придумайте пароль</label><br>
    <input type="password" name="password1"><br>
    <label>Повіторіть пароль</label><br>
    <input type="password" name="password2"><br>
    <label>Добавте номер</label><br>
    <input type="number" name="number" {if isset($number)} value="{$number}" {/if}><br>
    <input type="submit" name="knopka" value="Зареэструвати"><br>
</form>
<form method="post" action="settingUser.php" enctype="multipart/form-data">
    <label>Редагуйте login</label><br>
    <input type="text" name="name" value="{$name}"><br>
    <label>Редагуйте email</label><br>
    <input type="email" name="email" value="{$email}"><br>
    <label>Редагуйте номер телефона</label><br>
    <input type="number" name="number" value="{$number}"><br>
    <label>Редагуйте аватар</label><br>
    <img src='imagesAvatar/{$avatar}' width="200px"><br>
    <input type="file" name="newAvatar"><br>
    <input type="hidden" name="oldAvatar" value="{$avatar}">
    <a href="updatePasswort.php">Редагувати пароль</a><br>
    <input type="submit" name="knopka" value="Редагувати"><br>
</form>
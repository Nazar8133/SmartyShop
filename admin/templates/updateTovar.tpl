<form method="post" action="updateTovar.php" enctype="multipart/form-data">
    <label>Редагуйте metaTitle</label><br>
    <input type="text" name="metaTitle" value="{$metaTitle}"><br>
    <label>Редагуйте metaDiscription</label><br>
    <input type="text" name="metaDiscription" value="{$metaDiscription}"><br>
    <label>Редагуйте metaKeywords</label><br>
    <input type="text" name="metaKeywords" value="{$metaKeywords}"><br>
    <label>Редануйте title</label><br>
    <input type="text" name="title" value="{$title}"><br>
    <label>Редагуйте ціну</label><br>
    <input type="number" name="price" value="{$price}"><br>
    <label>Редагуйте кількість</label><br>
    <input type="number" name="kolvo" value="{$kolvo}"><br>
    <label>Редагуйте характеристику</label><br>
    <textarea name="har">{$har}</textarea><br>
    <label>Редагуйте дату виготовлення</label><br>
    <input type="date" name="data" value="{$data}"><br>
    <label>Редагуйте фотографію</label><br>
    <input type="file" name="photo[]" multiple><br>
    <table border="1">

        {section loop=$photo name=i}
        <tr>
            <th><img src="../images/{$photo[i].name}" width="100px"></th>
            <th><a href="delPhoto.php?fileName={$photo[i].name}&id={$photo[i].id}&idTovar={$photo[i].idTovar}">Видалити</a></th>
            <th><input type="radio" name="status" value="{$photo[i].id}" {if $photo[i].status==1}checked{/if}>{if $photo[i].status==1}Головна{else}Неголовна{/if}</th>
        </tr>
            {/section}

    </table>
    <input type="submit" name="knopka" value="Редагувати"><br>
    <input type="hidden" name="id" value="{$id}">
</form>
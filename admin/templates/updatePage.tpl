<form method="post" action="updatePage.php">
    <label>Редагуйте metaTitle</label><br>
    <textarea name="metaTitle">{$metaTitle}</textarea><br>
    <label>Редагуйте metaDiscription</label><br>
    <textarea name="metaDiscription">{$metaDiscription}</textarea><br>
    <label>Редагуйте metaKeywords</label><br>
    <textarea name="metaKeywords">{$metaKeywords}</textarea><br>
    <label>Редагуйте title</label><br>
    <input type="text" name="title" value="{$title}"><br>
    <label>Редагуйте fullContent</label><br>
    <textarea name="fullContent">{$fullContent}</textarea><br>
    <label>Редагуйте назву сторінки</label><br>
    <input type="text" name="name" value="{$name}"><br>
    <label>Редагувати page</label><br>
    <input type="text" name="page" value="{$page}"><br>
    <label>Редагувати пріритет</label><br>
    <select name="prior"><br>
        {for $i=1; $i<={$numRowsPrior}; $i++}
        <option value="{$i}" {if $prior==$i}selected{/if}>{$i}</option>
        {/for}
    </select><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="priorOld" value="{$prior}">
    <input type="submit" name="knopka" value="Редагувати"><br>
</form>
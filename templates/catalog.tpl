<div class="sort-wrapper">
    <span class="sort-text">Сортувати за:</span>
    <div class="sort-buttons">
        <a href="catalog.php?sort2={$sort2}{if isset($idBrend)}&id={$idBrend}{/if}" class="sort-button">Назвою</a>
        <a href="catalog.php?sort={$sort}{if isset($idBrend)}&id={$idBrend}{/if}" class="sort-button">Ціною</a>
    </div>
</div>
{section loop=$tovar name=i}
<li class="span3">
    <div class="thumbnail">
        <a href="product_details.html"><img src="/images/{$tovar[i].photo}" alt="" class="product-image"></a>
        <div class="caption">
            <div class="product-details">
            <h3 class="product-title">{$tovar[i].metaTitle}</h3>
            </div>
            <h4 style="text-align:center"><a class="btn" href="details.php?id={$tovar[i].id}"> <i class="icon-zoom-in"></i></a> {$tovar[i].kolvo} <a class="btn btn-primary">{$tovar[i].price}</a></h4>
        </div>
    </div>
</li>
{/section}
<div class="pagination-wrapper">
    <table class="pagination">
        <tr>
            {if $activePage==1}
                <th class="activepage"> < </th>
                <th class="activepage"> << </th>
            {else}
                <th><a href="catalog.php?page=1{if isset($sort)}&sort={$sort1}{/if}{if isset($sort2)}&sort2={$sort12}{/if}{if isset($idBrend)}&id={$idBrend}{/if}"> < </a></th>
                <th><a href="catalog.php?page={$activePage-1}{if isset($sort)}&sort={$sort1}{/if}{if isset($sort2)}&sort2={$sort12}{/if}{if isset($idBrend)}&id={$idBrend}{/if}"> << </a></th>
            {/if}
            {for $p=1; $p<=$pages; $p++}
                {if $activePage==$p}
                    <th class="activepage">{$p}</th>
                {else}
                    <th><a href="catalog.php?page={$p}{if isset($sort)}&sort={$sort1}{/if}{if isset($sort2)}&sort2={$sort12}{/if}{if isset($idBrend)}&id={$idBrend}{/if}">{$p}</a></th>
                {/if}
            {/for}
            {if $activePage==$pages}
                <th class="activepage"> >> </th>
                <th class="activepage"> > </th>
            {else}
                <th><a href="catalog.php?page={$activePage+1}{if isset($sort)}&sort={$sort1}{/if}{if isset($sort2)}&sort2={$sort12}{/if}{if isset($idBrend)}&id={$idBrend}{/if}"> >> </a></th>
                <th><a href="catalog.php?page={$pages}{if isset($sort)}&sort={$sort1}{/if}{if isset($sort2)}&sort2={$sort12}{/if}{if isset($idBrend)}&id={$idBrend}{/if}"> > </a></th>
            {/if}
        </tr>
    </table>
</div>

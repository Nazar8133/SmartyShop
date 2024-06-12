<table border="1">
    <tr>
        <th>№</th>
        <th>Назва кросівок</th>
        <th>Ціна</th>
        <th>Характеристика</th>
        <th>Кількість кросівок</th>
    </tr>
    {section loop=$tovar name=i}
    <tr>
            <th>{$tovar[i].number}</th>
            <th>{$tovar[i].metaTitle}</th>
            <th>{$tovar[i].price}</th>
            <th>{$tovar[i].har}</th>
            <th>{$tovar[i].kolvo}</th>
    </tr>
    {/section}
</table>
<table border="1">
    <tr>
        {if $activePage==1}
            <th class="activepage"> < </th>
            <th class="activepage"> << </th>
        {else}
            <th><a href="search.php?page=1{if isset($searchPriceOt)}&searchPriceOt={$searchPriceOt}{/if}{if isset($searchPriceDo)}&searchPriceDo={$searchPriceDo}{/if}{if isset($searchTovar)}&searchTovar={$searchTovar}{/if}"> < </a></th>
            <th><a href="search.php?page={$activePage-1}{if isset($searchPriceOt)}&searchPriceOt={$searchPriceOt}{/if}{if isset($searchPriceDo)}&searchPriceDo={$searchPriceDo}{/if}{if isset($searchTovar)}&searchTovar={$searchTovar}{/if}"> << </a></th>
        {/if}
        {for $p=1; $p<=$pages; $p++}
            {if $activePage==$p}
                <th class="activepage">{$p}</th>
            {else}
                <th><a href="search.php?page={$p}{if isset($searchPriceOt)}&searchPriceOt={$searchPriceOt}{/if}{if isset($searchPriceDo)}&searchPriceDo={$searchPriceDo}{/if}{if isset($searchTovar)}&searchTovar={$searchTovar}{/if}">{$p}</a></th>
            {/if}
        {/for}
        {if $activePage==$pages}
            <th class="activepage"> >> </th>
            <th class="activepage"> > </th>
        {else}
            <th><a href="search.php?page={$activePage+1}{if isset($searchPriceOt)}&searchPriceOt={$searchPriceOt}{/if}{if isset($searchPriceDo)}&searchPriceDo={$searchPriceDo}{/if}{if isset($searchTovar)}&searchTovar={$searchTovar}{/if}"> >> </a></th>
            <th><a href="search.php?page={$pages}{if isset($searchPriceOt)}&searchPriceOt={$searchPriceOt}{/if}{if isset($searchPriceDo)}&searchPriceDo={$searchPriceDo}{/if}{if isset($searchTovar)}&searchTovar={$searchTovar}{/if}"> > </a></th>
        {/if}
    </tr>
</table>
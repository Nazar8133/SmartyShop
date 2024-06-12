{section loop=$tovar name=i}
    <li class="span3">
        <div class="thumbnail">
            <a href="product_details.html"><img src="/images/{$tovar[i].photo}" alt="" class="product-image"></a>
            <div class="caption">
                <div class="product-details">
                    <h3 class="product-title">{$tovar[i].metaTitle}</h3>
                </div>
                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> {$tovar[i].kolvo} <a class="btn btn-primary">{$tovar[i].price}</a></h4>
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
</div>
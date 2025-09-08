<div class="span3">
    <a>
        <img src="/images/{$tovar.photo}" style="width:100%"/>
    </a>
    <div id="differentview" class="moreOptopm carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <h4>Дата виготовлення: {$tovar.data}</h4>
            </div>
        </div>
    </div>
    <div class="btn-toolbar">

    </div>
</div>
<div class="span6">
    <h3>{$tovar.metaTitle}</h3>
    <hr class="soft"/>
    <form class="form-horizontal qtyFrm">
        <div class="control-group">
            <label class="control-label"><span>{$tovar.price}</span></label>
            <div class="controls">
                {$tovar.knopka}
            </div>
        </div>
    </form>

    <hr class="soft"/>
    <h4>Кількість на складі: {$tovar.kolvo}</h4>
    <hr class="soft clr"/>
    <p>
        {$tovar.har}

    </p>
    <br class="clr"/>
</div>
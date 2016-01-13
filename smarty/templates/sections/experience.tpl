        <section class="jumbotron" id="experience">
            <div class="experience-content">
                <h2>{translation langId="42"}
                </h2>
                <hr>
                <ul class="bxslider">
                {foreach from=$experience item=item key=key}
                <li>
                    <h3>{$item.company}</h3>
                    <div class="experience-info">
                        {if $item.logo}
                        <div class="company-logo">
                            <img src="{$item.logo}" alt="{$item.logo}">
                        </div>
                        {/if}
                        <span>
                        {translation langId="66"}: {translation langEn=$item.address}<br>
                        {translation langId="10"}: <a href="{$item.url}">{$item.url}</a><br>
                        {translation langId="12"}: {$item.periodstart} - {if $item.periodend !="now"}{$item.periodend}{/if} {if $item.periodend =="now"}{translation langEn="now"}{/if}<br>
                        {translation langId="11"}: {translation langEn=$item.position}<br>
                        </span>
                    </div>

                    <div class="experience-desc">
                      {$item.$lang}
                    </div>

                </li>
                {/foreach}
                </ul>
            </div>
        </section>

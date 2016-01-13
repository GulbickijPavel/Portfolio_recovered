        <section class="jumbotron" id="projects">
            <div class="experience-content">
                <h2>{translation langEn="Projects"}
                </h2>
                <hr>
                <ul class="bxslider">
                    {foreach from=$projects item=item key=key}
                    <li>
                        <h3> {$item.projectname}</h3>
                         <ul class="bxslider inner">
                            <li>
                                <img src="{$item.image1}" alt="This picture loads on non-supporting browsers.">
<!--
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="{$item.imagePath}high-{$item.image1}">
                                   <source media="(min-width: 37.5em)" srcset="{$item.imagePath}med-{$item.image1}">
                                   <source srcset="{$item.imagePath}low-{$item.image1}">
                                   <img src="{$item.imagePath}low-{$item.image1}" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
-->
                            </li>
                            <li>
                                <img src="{$item.image2}" alt="This picture loads on non-supporting browsers.">
<!--
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="{$item.imagePath}high-{$item.image2}">
                                   <source media="(min-width: 37.5em)" srcset="{$item.imagePath}med-{$item.image2}">
                                   <source srcset="{$item.imagePath}low-{$item.image2}">
                                   <img src="{$item.imagePath}low-{$item.image2}" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
-->
                            </li>
                            <li>
                                <img src="{$item.image3}" alt="This picture loads on non-supporting browsers.">
<!--
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="{$item.imagePath}high-{$item.image3}">
                                   <source media="(min-width: 37.5em)" srcset="{$item.imagePath}med-{$item.image3}">
                                   <source srcset="{$item.imagePath}low-{$item.image3}">
                                   <img src="{$item.imagePath}low-{$item.image3}" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
-->
                            </li>
                        </ul>
                        <article class="experience-desc">
                          {$item.$lang}
                        </article>
                    </li>
                    {/foreach}
                </ul>
            </div>
        </section>

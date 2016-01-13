<?php
function createTemplate($value='')
{
  # code...
}
$pagename = "about";
$item = '$item';
$livingplace = '$livingplace';
$text = <<<'EOD'
<section class="jumbotron" id="$pagename">
      <div class="$pagename-content">
          <h2>{translation langEn="40"}</h2>
          <hr>
          {foreach from=$pagename item=item key=key}
  <img class="my-photo" alt="" src="{$item.userphoto}">
          {assign var="livingplace" value="{$item.$livingplace}"}
          <div class="about">
              <span>
                  {$item.name} {$item.surname}<br>
                  {translation langId="3"}: {translation langEn="{$livingplace}"}<br>
                  {translation langId="6"}: {$item.phone} <br>
                  {translation langId="4"}: <a href="mailto:{$item.email}">{$item.email}</a> <br>
              </span>
          </div>
          <article class="ar-about">
             <h6>{translation langId="1"} </h6>
                {$item.$lang}
          </article>
          {/foreach}
      </div>
  </section>
EOD;
        //
        //

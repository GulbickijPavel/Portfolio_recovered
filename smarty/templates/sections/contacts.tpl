
        <div id= "contactForm" class="contact-form-container jumbotron hide-me">
            <p class="contact-forminfo">
                {foreach from=$about item=item key=key}
                Github: <a href="https://github.com/GulbickijPavel" target="_blank"> https://github.com/GulbickijPavel </a> <br>
                <a href="files/cv.pdf" target="_blank" download="cv.pdf"> {translation langId ="77"}</a>
                {/foreach}
            </p>

            <form class="form-horizontal contact-form" id="contact-form">
              <fieldset>
                <legend>{translation langId="17"} {translation langId="18"}</legend>
                <span class="help-block">{translation langId="19"}</span>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="9"}*</span>
                    <input type="text" class="form-control" id="inputCompany" name="company" data-validation="length" data-validation-length="min3"  data-validation-error-msg="{translation langId="58"}" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="14"}*</span>
                    <input type="text" class="form-control" id="inputSenderName"  name="name" data-validation="custom" data-validation-regexp="^([ a-zA-Zа-яА-Я]+)$" data-validation-error-msg="{translation langId="55"}" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="15"}*</span>
                    <input type="text" class="form-control" id="inputSenderSurname"  name="surname" data-validation="custom" data-validation-regexp="^([ a-zA-Zа-яА-Я]+)$" data-validation-error-msg="{translation langId="55"}" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="4"}*</span>
                    <input class="form-control" data-validation="email" data-validation-error-msg="{translation langId="56"}" id="cemail"  placeholder="{translation langId="78"}" name="email" data-validation-optional="true">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="13"}</span>
                    <input type="phone" class="form-control" id="inputPhone"  placeholder="8459632145" name="phone" data-validation="custom" data-validation-regexp="^([ +0-9]+)$" data-validation-error-msg="{translation langId="57"}" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="16"} *</span>
                    <textarea class="form-control" rows="3" id="editor" name="comments" data-validation="length" data-validation-length="min3"  data-validation-error-msg="{translation langId="59"}" data-validation-optional="true" ></textarea>
                </div>
                  <div class="confirmation">
                        <!-- <button type="button" name="button" class="btn btn-primary im-not-a-robot">Im not a robot</button> -->
                        <button type="submit" class="btn btn-primary cform-submit">{translation langId="21"}</button>
                        <button type="reset" id="cform-cancel" class="btn btn-default cform-cancel">{translation langId="20"}</button>
                        <div class="form-group">
                           <div class="checkbox form-control">
                             <label>
                               <input class="contact-form-check" type="checkbox"> {translation langId="80"}
                               <img src="images/wait.gif" class="contact-form-wait hide-me" alt="wait"/>
                             </label>
                           </div>

                       </div>
                    </div>
              </fieldset>
            </form>
        </div>

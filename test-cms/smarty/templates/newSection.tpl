
  <form id="new-section-form228" class="form-horizontal" enctype="multipart/form-data">
    <div class="new-section-form-container hide-me">
      <div class="jumbotron control-section-form">
        <h3>Sukūrti skilį</h3>
        <div class="input-group">
          <span class="input-group-addon">Šablono tipas:</span>
          <select name="sectionType" class="form-control">
              <option value="simple">Paprastas</option>
              <option value="saab">Greitai bus daugiau...</option>
          </select>
        </div>
        <div class="input-group">
          <span class="input-group-addon">Skilties pavadinimas:</span>
          <input type="text" class="form-control" name="sectionName" data-validation="custom" data-validation-regexp="^([ a-zA-Z0-9]+)$" data-validation-error-msg="Naudokite tik lotiniškas raides/skaičius, tarpus" data-validation-optional="true">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Naudoti lentelę:</span>
          <input type="text" class="form-control" name="usingTable" data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$" data-validation-error-msg="Naudokite tik lotiniškas raides/skaičius be tarpų" data-validation-optional="true">
        </div>
      <input type="button" value="Uždaryti" class="close-form-btn btn btn-default">
      <!-- <button class="btn btn-default close-form-btn" type="">Uždaryti</button> -->
      <button class="btn btn-primary" type="submit">Pateikti</button>
    </div>
  </div>
  </form>
  <form id="control-section-form228" class="form-horizontal" enctype="multipart/form-data">
    <div class="control-section-form-container hide-me">
      <div class="jumbotron control-section-form">
        <h3>Redaguoti skiltį</h3>
        <div class="input-group">
          <span class="input-group-addon">Skiltis:</span>
          <select id="sectionid2225" class="form-control" ng-options="option.sectionname for option in sectionCombo.combo track by option.sectionid" ng-model="sectionVal"></select>
          <div class="input-group-btn">
             <a href="#" id="section-del-button" class="btn btn-danger">Ištrinti</a>
          </div>
        </div>
        {literal}
        <div ng-repeat="item in secToEdit">
            <div ng-if='item.Type == "varchar(50)" && item.Field != "lang"' class="input-group">
                <span class="input-group-addon">{{item.Field}}</span>
                <input disabled class="form-control col-xs-9" type="text" name="{{item.Field}}" value="{{sectionVal[item.Field]}}">
            </div>
        </div>
        {/literal}
      <input type="button" value="Uždaryti" class="close-form-btn btn btn-default">
      <!-- <button class="btn btn-default close-form-btn" type="">Uždaryti</button> -->
      <button class="btn btn-primary" type="submit">Pateikti</button>
    </div>
  </div>
  </form>

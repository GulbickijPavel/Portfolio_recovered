                <div id="new-item" class="tab-pane fade">
                     {literal}
                    <form class="form-horizontal" id="new-tem-form" enctype="multipart/form-data">
                      <input id="new-item-table-field" class="form-control col-xs-9" type="hidden" name="table" value="">
                        <div ng-repeat="item in ToEdit">
                            <div ng-if='item.Type == "varchar(50)"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}"
                                     data-validation="length"
                                     data-validation-length="max50"
                                     data-validation-error-msg-length="Maksimalus įrašo ilgis 50 simbolių">
                            </div>
                            <div ng-if='item.Type == "int(8)" || item.Type == "int(10)" ' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}">
                            </div>
                            <div ng-if='item.Type == "date"' class="input-group">
                                  <span class="input-group-addon">{{item.Field}}</span>
                                  <input  class="form-control date-picker col-xs-9" type="text" name="{{item.Field}}" value="">
                            </div>
                            <div ng-if='item.Type == "varchar(255)"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <input  type="file" name="fileToUpload[]" class="form-control col-xs-9 image-path" id="new-{{item.Field}}"
                                data-validation="mime size required"
                                data-validation-allowing="jpg, png, gif"
                                data-validation-max-size="400kb"
                                data-validation-error-msg-size="Maksimalus užkraunamų nuortraukų dydis 400kb..."
                                data-validation-error-msg-mime="Užkrauti galima tik nuotraukas..."
                                data-validation-error-msg-required="Pasirinkite nuotrauką, maksimalus dydis 400kb, palaikomi formatai: jpg, png, gif">
                                <input  type="hidden" name="{{item.Field}}" class="form-control col-xs-9" value="" id="new-{{item.Field}}-image">
                                <img ng-src="" width="200" style="display:none;" id="example-new-{{item.Field}}" class="image-example"/>
                            </div>
                            <div ng-if='item.Type == "varchar(10)" && item.Field == "category"' class="input-group" >
                                <span class="input-group-addon">Kategorija</span>
                                <select class="form-control" name="{{item.Field}}" ng-options="option.category for option in skillCat track by option.catid" ng-model="setSkillCat[0]">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary new-item-submit-button">Pateikti</button>
                        </div>
                        {/literal}
                    </form>
                </div>

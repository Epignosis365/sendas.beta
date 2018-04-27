<div class="col-md-6 col-sm-6 col-xs-6" style="margin-top: 0px;background-color: #; padding-left: 45px;">

     <div class="col-md-12 pull-right" style="padding: 0px;">
          <!--
          <div class="col-md-2" style="padding: 0px;display: none;">
               <i class="fa fa-bars" style="color: #686868;font-size: 2.0em;padding-top: 7px;"></i>
          </div>
          -->
          <div class="col-md-12 pull-right" style="padding: 0px;">
               <select name="country" id="dLabelSelec" class="btn btn-primary text-left" onchange="yesnoCheck(this);">
                    <option><?= $cookieProvinceJS; ?></option>
                    <option value="DFT">
                         <i class="fa fa-navicon"></i> Select. la province <span class="caret"></span>
                    </option>
                    <option value="AB" <?php if($_COOKIE['provinceSelected']=="AB") echo "selected"; ?>> Alberta </option>
                    <option value="BC" <?php if($_COOKIE['provinceSelected']=="BC") echo "selected"; ?>> Colombie-Britannique </option>
                    <option value="MB" <?php if($_COOKIE['provinceSelected']=="MB") echo "selected"; ?>> Manitoba </option>
                    <option value="NB" <?php if($_COOKIE['provinceSelected']=="NB") echo "selected"; ?>> Nouveau-Brunswick </option>
                    <option value="NL" <?php if($_COOKIE['provinceSelected']=="NL") echo "selected"; ?>> Terre-Neuve-et-Labrador </option>
                    <option value="NT" <?php if($_COOKIE['provinceSelected']=="NT") echo "selected"; ?>> Territoires du Nord-Ouest </option>
                    <option value="NS" <?php if($_COOKIE['provinceSelected']=="NS") echo "selected"; ?>> Nouvelle-Écosse </option>
                    <!--<option value="NU"> Nunavut </option>-->
                    <option value="ON" <?php if($_COOKIE['provinceSelected']=="ON") echo "selected"; ?>> Ontario </option>
                    <option value="PE" <?php if($_COOKIE['provinceSelected']=="PE") echo "selected"; ?>> Île-du-Prince-Édouard </option>
                    <option value="QC" <?php if($_COOKIE['provinceSelected']=="QC") echo "selected"; ?>> Quebec </option>
                    <option value="SK" <?php if($_COOKIE['provinceSelected']=="SK") echo "selected"; ?>> Saskatchewan </option>
                    <option value="YT" <?php if($_COOKIE['provinceSelected']=="YT") echo "selected"; ?>> Yukon </option>
               </select>
               <!-- <i class="fa fa-caret-down" aria-hidden="true"></i> -->
          </div>
     </div>
     
</div>

<div class="cart largenav_ col-md-6 col-sm-6 col-xs-6 pull-right" style="margin-top: 0px;background-color: #;padding: 0px; padding-right: 30px;">
     <select name="DFT" id="DFT" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: ;"> 
          <option><?= $_COOKIE['villeSelectedON']; ?></option>
          <option value="">
               <span class="fa fa-navicon"></span>Selectionner la ville <span class="caret"></span>
          </option>
     </select>

     <select name="AB" id="AB" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>AB: Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllAB">Tout l'Alberta</option>
          <?php                                             
          foreach($Alberta as $key => $value) { ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          }
          ?>
     </select>

     <select name="BC" id="BC" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>BC: Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllAB">Tout British Columbia</option>
          <?php                                             
          foreach($British_Columbia as $key => $value):
               ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>

     <select name="MB" id="MB" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>MB: Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllAB">Tout Manitoba</option>
          <?php                                             
          foreach($Manitoba as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>

     <select name="NB" id="NB" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>NB: Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllAB">Tout New Brunswick</option>
          <?php                                             
          foreach($New_Brunswick as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>

     <select name="NL" id="NL" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>NL: Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllAB">Tout Newfoundland And Labrador</option>
          <?php                                             
          foreach($Newfoundland_And_Labrador as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>

     <select name="NT" id="NT" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>NT: Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllAB">Tout Northwest Territories</option>
          <?php                                             
          foreach($Northwest_Territories as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>

     <select name="NS" id="NS" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>NS: Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllNS">Tout Nova Scotia</option>
          <?php                                             
          foreach($Nova_Scotia as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>
     <!--
     <select name="NU" id="NU" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>NU: Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllNU">Tout la NU</option>
          <?php                                             
          foreach($Alberta as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>
     -->
     <select name="ON" id="ON" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>ON Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllON">Tout l'Ontario</option>
          <?php                                             
          foreach($Ontario as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>

     <select name="PE" id="PE" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>PE: Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllPE">Tout Prince Edward Island</option>
          <?php                                             
          foreach($Prince_Edward_Island as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>

     <select name="QC" id="QC" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>QC Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllQC">Tout Quebec</option>
          <?php                                             
          foreach($Quebec as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>

     <select name="SK" id="SK" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span>SK Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllSK">Tout Saskatchewan</option>
          <?php                                             
          foreach($Saskatchewan as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>

     <select name="YT" id="YT" onchange="yesVilleSelected(this);" role="button" data-toggle="dropdown" class="btn btn-primary_ dLabelSelec pull-right" data-target="#" style="display: none;">
          <option value="">
               <span class="fa fa-navicon"></span> Selectionner la ville <span class="caret"></span>
          </option>
          <option value="AllYT">YT: Tout Yukon</option>
          <?php                                             
          foreach($Yukon as $key => $value):
          ?>
               <option value='<?= $value ?>' <?php if($_COOKIE['villeSelectedON']== $value) echo "selected"; ?>> <?= $value ?> </option> <?php
          endforeach;
          ?>
     </select>
</div>
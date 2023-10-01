<?php

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
include_file('core', 'authentification', 'php');
if (!isConnect()) {
  include_file('desktop', '404', 'php');
  die();
}
?>
<form class="form-horizontal">
  <fieldset>
    <div class="form-group">
      <label class="col-md-4 control-label">{{Global param 1}}
        <sup><i class="fas fa-question-circle tooltips" title="{{Renseignez le paramètre 1 du plugin}}"></i></sup>
      </label>
      <div class="col-md-4">
        <input class="configKey form-control" data-l1key="param1"/>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">{{Global param 2}}
        <sup><i class="fas fa-question-circle tooltips" title="{{Renseignez le paramètre 2 du plugin}}"></i></sup>
      </label>
      <div class="col-md-4">
        <input class="configKey form-control" data-l1key="param2"/>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">{{Global param 3}}
        <sup><i class="fas fa-question-circle tooltips" title="{{Sélectionnez du paramètre 3 du plugin}}"></i></sup>
      </label>
      <div class="col-md-4">
        <select class="configKey form-control" data-l1key="param3">
          <option value=""></option>
          <option value="value1">value1</option>
          <option value="value2">value2</option>
        </select>
      </div>
    </div>
  </fieldset>
</form>

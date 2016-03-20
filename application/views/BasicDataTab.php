<legend>新增數據</legend>
<form id="weight_form" class="form-horizontal" action="/GoFightWin/BasicData/add_weight_action" method="post">
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="weight">體重</label>  
        <div class="col-sm-4 col-md-4 input-group">
            <input id="weight" name="weight" type="text" class="form-control input-md">
            <span class="input-group-addon" id="basic-addon2">公斤</span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="weight_date">測量日期</label>
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_date_picker' id='weight_date_picker'>
                <input id="weight_date" name="weight_date" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="weight_time">測量時間</label>
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_time_picker' id='weight_time_picker'>
                <input id="weight_time" name="weight_time" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">新增體重紀錄</button>
</form>
<hr>
<form class="form-horizontal" action="/GoFightWin/BasicData/add_temp_action" method="post">
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="temperature">體溫</label>  
        <div class="col-sm-4 col-md-4 input-group">
            <input id="temperature" name="temperature" type="text" class="form-control input-md">
            <span class="input-group-addon" id="basic-addon2">℃</span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="temp_date">測量日期</label> 
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_date_picker' id='temp_date_picker'>
                <input id="temp_date" name="temp_date" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="temp_time">測量時間</label> 
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_time_picker' id='temp_time_picker'>
                <input id="temp_time" name="temp_time" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">新增體溫紀錄</button>
</form>
<hr>
<form class="form-horizontal" action="/GoFightWin/BasicData/add_pressure_action" method="post">
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="systolic">血壓</label>  
        <div class="col-xs-5 col-sm-2 col-md-2">
            <input id="systolic" name="systolic" type="text" class="form-control input-md">
        </div>
        <label class="control-label" style="float: left;" for="diastolic">／</label>
        <div class="col-xs-5 col-sm-2 col-md-2">
            <input id="diastolic" name="diastolic" type="text" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="heartbeat">心跳</label>
        <div class="col-sm-2 col-md-2">
            <input id="heartbeat" name="heartbeat" type="text" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="pressure_date">測量日期</label>  
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_date_picker' id='pressure_date_picker'>
                <input id="pressure_date" name="pressure_date" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="pressure_time">測量時間</label>  
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_time_picker' id='pressure_time_picker'>
                <input id="pressure_time" name="pressure_time" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">新增血壓心跳紀錄</button>
</form>
<hr>
<form class="form-horizontal" action="/GoFightWin/BasicData/add_defecation_action" method="post">
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="defecation_date">排便</label>  
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_date_picker' id='defecation_date_picker'>
                <input id="defecation_date" name="defecation_date" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="defecation_time"></label>  
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_time_picker' id='defecation_time_picker'>
                <input id="defecation_time" name="defecation_time"  type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">新增排便紀錄</button>
</form>
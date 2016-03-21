<legend>新增運動紀錄</legend>
<form id="sport_form" class="form-horizontal form-general" action="/GoFightWin/sport/add_sport_action" method="post">
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="sport">運動項目</label>  
        <div class="col-sm-4 col-md-4">
            <input id="sport" name="sport" type="text" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="amount">運動量</label>  
        <div class="col-sm-4 col-md-4">
            <input id="amount" name="amount" type="text" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="sport_date">日期</label>
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_date_picker' id='sport_date_picker'>
                <input id="sport_date" name="sport_date" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="sport_time">時間</label>
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_time_picker' id='sport_time_picker'>
                <input id="sport_time" name="sport_time" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">送出運動紀錄</button>
</form>

<legend>新增飲食紀錄</legend>
<form id="food_form" class="form-horizontal form-general" action="/GoFightWin/Food/add_food_action" method="post">
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="food">飲食項目</label>  
        <div class="col-sm-4 col-md-4">
            <input id="food" name="food" type="text" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="food_quantity">份量</label>  
        <div class="col-sm-4 col-md-4">
            <input id="food_quantity" name="food_quantity" type="text" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="food_date">日期</label>
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_date_picker' id='food_date_picker'>
                <input id="food_date" name="food_date" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="food_time">時間</label>
        <div class="col-sm-4 col-md-4">
            <div class='input-group date bd_time_picker' id='food_time_picker'>
                <input id="food_time" name="food_time" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">送出飲食紀錄</button>
</form>

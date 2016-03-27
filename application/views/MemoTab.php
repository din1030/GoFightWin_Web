<legend>新增 Memo</legend>
<form id="memo_form" class="form-horizontal form-general" action="/GoFightWin/memo/add_memo_action" method="post">
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="memo">內容</label>  
        <div class="col-xs-12 col-sm-4 col-md-4">
            <textarea id="memo" name="memo" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="memo_date">日期</label>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class='input-group date bd_date_picker' id='memo_date_picker'>
                <input id="memo_date" name="memo_date" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="memo_time">時間</label>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class='input-group date bd_time_picker' id='memo_time_picker'>
                <input id="memo_time" name="memo_time" type='text' class="form-control input-md" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">送出 Memo</button>
</form>

<div>

  <!-- Nav tabs -->
 	<ul class="nav nav-tabs" role="tablist">
    	<li role="presentation" class="active"><a href="#basicdata" aria-controls="basicdata" role="tab" data-toggle="tab">數據紀錄</a></li>
        <li role="presentation"><a href="#food" aria-controls="food" role="tab" data-toggle="tab">多吃多健康</a></li>
        <li role="presentation"><a href="#medical" aria-controls="medical" role="tab" data-toggle="tab">藥到病除</a></li>
        <li role="presentation"><a href="#sport" aria-controls="sport" role="tab" data-toggle="tab">運動強身</a></li>
        <li role="presentation"><a href="#dayreport" aria-controls="dayreport" role="tab" data-toggle="tab">日期搜尋</a></li>
    </ul>

  <!-- Tab panes -->
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="basicdata">
            <legend>本日紀錄</legend>
            <div>
                <ul>
                    <li>體重</li>
                    尚無紀錄！
                    <li>體溫</li>
                    尚無紀錄！
                    <li>血壓</li>
                    尚無紀錄！
                    <li>心跳</li>
                    尚無紀錄！
                    <!-- <li>血糖</li> -->
                    <!-- 尚無紀錄 -->
                    <li>排便</li>
                    尚無紀錄！
                </ul>
            </div>
            <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label" for="weight">體重</label>  
                <div class="col-sm-4 col-md-4 input-group">
                    <input id="weight" name="weight" type="text" placeholder="" class="form-control input-md">
                    <span class="input-group-addon" id="basic-addon2">公斤</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label" for="weight_time">測量時間</label>
                <div class="col-sm-4 col-md-4">
                    <div class='input-group date' id='weight_time'>
                        <input id="weight_time" name="weight_time"  type='text' class="form-control input-md" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
            </div>
            </form>
            <hr>
            <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label" for="temperature">體溫</label>  
                <div class="col-sm-4 col-md-4 input-group">
                    <input id="temperature" name="temperature" type="text" placeholder="" class="form-control input-md">
                    <span class="input-group-addon" id="basic-addon2">℃</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label" for="temp_time">測量時間</label> 
                <div class="col-sm-4 col-md-4">
                    <div class='input-group date' id='temp_time'>
                        <input id="temp_time" name="temp_time"  type='text' class="form-control input-md" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
            </div>
            </form>
            <hr>
            <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label" for="blood_pressure1">血壓</label>  
                <div class="col-sm-2 col-md-2">
                    <input id="blood_pressure1" name="blood_pressure1" type="text" placeholder="" class="form-control input-md">
                </div>
                <label class="control-label" style="float: left;" for="blood_pressure2">／</label>
                <div class="col-sm-2 col-md-2">
                    <input id="blood_pressure2" name="blood_pressure2" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label" for="heartbeat">心跳</label>
                <div class="col-sm-2 col-md-2">
                    <input id="heartbeat" name="heartbeat" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label" for="pressure_time">測量時間</label>  
                <div class="col-sm-4 col-md-4">
                    <div class='input-group date' id='pressure_time'>
                        <input id="pressure_time" name="pressure_time"  type='text' class="form-control input-md" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
            </div>
            </form>
            <hr>
            <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label" for="defecation_time">排便</label>  
                <div class="col-sm-4 col-md-4">
                    <div class='input-group date' id='defecation_time'>
                        <input id="defecation_time" name="defecation_time"  type='text' class="form-control input-md" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
            </div>
            </form>
        </div>

        <div role="tabpanel" class="tab-pane" id="food">
            
        </div>

        <div role="tabpanel" class="tab-pane" id="medical">
            
        </div>

        <div role="tabpanel" class="tab-pane" id="sport">
            
        </div>

        <div role="tabpanel" class="tab-pane" id="dayreport"></div>

    </div>

</div>

<hr>
<!-- <div id="manage-block-list" class="row">
    <div class="col-lg-4 col-sm-4 col-md-4 col-sm-6 col-xs-6 manage-block">
        <a class="btn btn-block btn-lg btn-info list-group" href="/GoFightWin/exhibitions">展覽管理</a>
    </div>
</div> -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#weight_time').datetimepicker({
            // format: 'HH:mm'
            viewMode: 'days',
            stepping: 5
        });
        $('#temp_time').datetimepicker({
            viewMode: 'days',
            stepping: 5
            // format: 'HH:mm'
        });
        $('#pressure_time').datetimepicker({
            viewMode: 'days',
            stepping: 5
            // format: 'HH:mm'
        });
        $('#defecation_time').datetimepicker({
            viewMode: 'days',
            stepping: 5
            // format: 'HH:mm'
        });
    });
</script>

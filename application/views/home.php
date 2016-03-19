<div>

  <!-- Nav tabs -->
 	<ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">本日紀錄</a></li>
    	<li role="presentation"><a href="#basicdata" aria-controls="basicdata" role="tab" data-toggle="tab">基本數據</a></li>
        <li role="presentation"><a href="#food" aria-controls="food" role="tab" data-toggle="tab">多吃多健康</a></li>
        <li role="presentation"><a href="#medical" aria-controls="medical" role="tab" data-toggle="tab">藥到病除</a></li>
        <li role="presentation"><a href="#sport" aria-controls="sport" role="tab" data-toggle="tab">運動強身</a></li>
        <li role="presentation"><a href="#dayreport" aria-controls="dayreport" role="tab" data-toggle="tab">日期搜尋</a></li>
    </ul>

  <!-- Tab panes -->
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="today">
            <legend>基本數據</legend>
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
            <legend>飲食紀錄</legend>
            <div>
                <ul>
                    <li>尚無紀錄！</li>
                </ul>
            </div>
            <legend>用藥/醫療紀錄</legend>
            <div>
                <ul>
                    <li>尚無紀錄！</li>
                </ul>
            </div>
            <legend>運動</legend>
            <div>
                <ul>
                    <li>尚無紀錄！</li>
                </ul>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="basicdata">
            <legend>新增數據</legend>
            <form id="weight_form" class="form-horizontal" action="/GoFightWin/BasicData/add_weight_action" method="post">
                <div class="form-group">
                    <label class="col-sm-2 col-md-1 control-label" for="weight">體重</label>  
                    <div class="col-sm-4 col-md-4 input-group">
                        <input id="weight" name="weight" type="text" placeholder="" class="form-control input-md">
                        <span class="input-group-addon" id="basic-addon2">公斤</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-md-1 control-label" for="weight_date">測量日期</label>
                    <div class="col-sm-4 col-md-4">
                        <div class='input-group date' id='weight_date_picker'>
                            <input id="weight_date" name="weight_date"  type='text' class="form-control input-md" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-md-1 control-label" for="weight_time">測量時間</label>
                    <div class="col-sm-4 col-md-4">
                        <div class='input-group date' id='weight_time_picker'>
                            <input id="weight_time" name="weight_time"  type='text' class="form-control input-md" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">新增體重紀錄</button>
            </form>
            <hr>
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 col-md-1 control-label" for="temperature">體溫</label>  
                    <div class="col-sm-4 col-md-4 input-group">
                        <input id="temperature" name="temperature" type="text" placeholder="" class="form-control input-md">
                        <span class="input-group-addon" id="basic-addon2">℃</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-md-1 control-label" for="temp_time">測量時間</label> 
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
                    <label class="col-sm-2 col-md-1 control-label" for="blood_pressure1">血壓</label>  
                    <div class="col-sm-2 col-md-1">
                        <input id="blood_pressure1" name="blood_pressure1" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="control-label" style="float: left;" for="blood_pressure2">／</label>
                    <div class="col-sm-2 col-md-1">
                        <input id="blood_pressure2" name="blood_pressure2" type="text" placeholder="" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-md-1 control-label" for="heartbeat">心跳</label>
                    <div class="col-sm-2 col-md-1">
                        <input id="heartbeat" name="heartbeat" type="text" placeholder="" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-md-1 control-label" for="pressure_time">測量時間</label>  
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
                    <label class="col-sm-2 col-md-1 control-label" for="defecation_time">排便</label>  
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
<!-- <div id="manage-block-list" class="row">
    <div class="col-lg-4 col-sm-4 col-md-4 col-sm-6 col-xs-6 manage-block">
        <a class="btn btn-block btn-lg btn-info list-group" href="/GoFightWin/exhibitions">展覽管理</a>
    </div>
</div> -->
<script type="text/javascript">
    $(document).ready(function() {
        var time_in_24hr = '';
        $('#weight_date_picker').datetimepicker({
            format: 'YYYY/MM/DD',
            useCurrent: true,
            viewMode: 'days'
            // stepping: 5
        });
        $('#weight_time_picker').datetimepicker({
            format: 'hh:mm A',
            useCurrent: true,
            // viewMode: 'days',
            stepping: 5
        });
        $("#weight_time_picker").on("dp.change", function(e) {
            time_in_24hr = moment($('#weight_time').val(), "hh:mm A").format("HH:mm");
        });
        
        $('#temp_time').datetimepicker({
            format: 'YYYY/MM/DD hh:mm A',
            viewMode: 'days',
            stepping: 5
        });
        $('#pressure_time').datetimepicker({
            format: 'YYYY/MM/DD hh:mm A',
            viewMode: 'days',
            stepping: 5
        });
        $('#defecation_time').datetimepicker({
            format: 'YYYY/MM/DD hh:mm A',
            viewMode: 'days',
            stepping: 5
        });
        

        $('form').ajaxForm({
            type: 'POST',
            // resetForm: true,
            data: { 
                // time_in_24hr: time_in_24hr
            },
            beforeSubmit: function(arr, $form, options) { 
                for(var key in arr){
                    if (arr[key].name == 'time']) {
                        arr[key].value = moment($('#weight_time').val(), "hh:mm A").format("HH:mm");
                        break;
                    }
                }
            },
            beforeSend: function(xhr) {
                // var time_in_24hr = moment($('#weight_time').val(), "hh:mm A").format("HH:mm");
                // alert(time_in_24hr);
                // var time_in_24hr = moment($('#weight_time').val(), "hh:mm A").format("HH:mm");
                $('#weight_time').val(moment($('#weight_time').val(), "hh:mm A").format("HH:mm"));
                $('#system-message').html('處理中...');
                $('#system-message').show();
            },
            success: function(error) {
                if (error) {
                    $('#system-message').html(error);
                    $('#system-message').show();
                    // $('#system-message').fadeOut();
                } else {
                    // $('#form_alert').hide();
                    // $('#form_alert').empty();
                    // $('form').clearForm();

                    // $.ajax({
                    //     url: '/iBeaGuide/exhibitions/print_exh_list',
                    //     type: "GET",
                    //     dataType: 'html',
                    //     success: function(html_block) {
                    //         $('#exh_list_block').html(html_block);
                    //         $('#exh_form_block').empty();
                    //         $('[data-toggle="table"]').bootstrapTable();
                    //         $('div.sortable.both:last').removeClass('th-inner sortable both').css('padding', '8px');
                    //         $('#system-message').html('完成');
                    //         $('#system-message').fadeOut();
                    //         $.scrollTo($('#add-exh-btn'), 500, {offset: -10});
                    //     }
                    // });

                    $('#system-message').html('完成');
                    $('#system-message').fadeOut();
                }
            }
        });

    });
</script>

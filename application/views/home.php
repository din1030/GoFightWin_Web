<div>

  <!-- Nav tabs -->
 	<ul class="nav nav-tabs margin-bottom-30" role="tablist">
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
                <?php $this->table->set_heading('體重', '測量時間'); ?>
                <?= $this->table->generate($weight); ?>
                <hr>
                <?php $this->table->set_heading('體溫', '測量時間'); ?>
                <?= $this->table->generate($temp); ?>
                <hr>
                <?php $this->table->set_heading('收縮壓', '舒張壓', '心跳', '測量時間'); ?>
                <?= $this->table->generate($pressure); ?>
                <hr>
                <?php $this->table->set_heading('排便時間'); ?>
                <?= $this->table->generate($defecation); ?>
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
            <?php $this->load->view('BasicDataTab'); ?>
        </div>

        <div role="tabpanel" class="tab-pane" id="food">
            <?php $this->load->view('FoodTab'); ?>
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

        $('.bd_date_picker').datetimepicker({
            format: 'YYYY/MM/DD',
            useCurrent: true,
            viewMode: 'days'
            // stepping: 5
        });
        $('.bd_time_picker').datetimepicker({
            format: 'hh:mm A',
            useCurrent: true,
            // viewMode: 'days',
            stepping: 5
        });
        
        $('form').ajaxForm({
            type: 'POST',
            resetForm: true,
            beforeSubmit: function(arr, $form, options) { 
                for(var key in arr){
                    if (arr[key].name.search('time') > 0) {
                        arr[key].value = moment($('#' + arr[key].name).val(), "hh:mm A").format("HH:mm");
                        break;
                    }
                }
            },
            beforeSend: function(xhr) {
                // var time_in_24hr = moment($('#weight_time').val(), "hh:mm A").format("HH:mm");
                // alert(time_in_24hr);
                // var time_in_24hr = moment($('#weight_time').val(), "hh:mm A").format("HH:mm");
                // $('#weight_time').val(moment($('#weight_time').val(), "hh:mm A").format("HH:mm"));
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

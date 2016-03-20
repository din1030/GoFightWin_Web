<div class="well">
	<form id="food_form" class="form-horizontal">
	    <div class="form-group">
	        <label class="col-xs-12 col-sm-2 col-md-2 control-label" for="search_date">選擇日期</label>
	        <div class="col-sm-4 col-md-4">
	            <div class='input-group date bd_date_picker' id='search_date_picker'>
	                <input id="search_date" name="search_date" type='text' class="form-control input-md" />
	                <span class="input-group-addon">
	                    <span class="glyphicon glyphicon-calendar"></span>
	                </span>
	            </div>
	        </div>
	        <button type="submit" class="btn btn-md btn-primary">查詢</button>
	    </div>
	</form>
</div>
<div id="day_report_result">
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
        <?php $this->table->set_heading('飲食項目', '份量', '時間'); ?>
        <?= $this->table->generate($food); ?>
    </div>

    <legend>用藥/醫療紀錄</legend>
    <div>
    </div>

    <legend>運動</legend>
    <div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#food_form').ajaxForm({
            type: 'POST',
            beforeSend: function(xhr) {
                $('#system-message').html('處理中...');
                $('#system-message').show();
            },
            success: function(error) {
                // if (error) {
                //     $('#system-message').html(error);
                //     $('#system-message').show();
                    // $('#system-message').fadeOut();
                // } else {
                    // $('#form_alert').hide();
                    // $('#form_alert').empty();
                    // $('form').clearForm();

                    $.ajax({
                        url: '/GoFightWin/DayReport/search_date_action',
                        type: "GET",
                        dataType: 'html',
                        success: function(html_block) {
                            $('#day_report_result').html(html_block);
                        }
                    });

                    $('#system-message').html('完成');
                    $('#system-message').fadeOut();
                // }
            }
        });
	});
</script>
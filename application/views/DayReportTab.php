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
        <?php $this->table->set_heading('運動項目', '運動量', '時間'); ?>
        <?= $this->table->generate($sport); ?>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#search_date').val(moment(new Date()).format("YYYY/MM/DD"));

		$('#search_form').ajaxForm({
            type: 'POST',
            dataType: 'html',
            beforeSend: function(xhr) {
                $('#system-message').html('處理中...');
                $('#system-message').show();
            },
            // success: function(error) {
            success: function(html_block) {
                $('#day_report_result').html(html_block);
                $('#system-message').html('完成');
                $('#system-message').fadeOut();

	            // $.ajax({
	            //     url: '/GoFightWin/DayReport/search_date_action',
	            //     type: "GET",
	            //     dataType: 'html',
	            //     success: function(html_block) {
	            //         $('#day_report_result').html(html_block);
	            //     }
	            // });

	            // $('#system-message').html('完成');
	            // $('#system-message').fadeOut();
            }
        });
	});
</script>
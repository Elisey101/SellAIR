<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 http://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004-2017 SoftNews Media Group
=====================================================
 ������ ��� ������� ���������� �������
=====================================================
 ����: rebuild.php
-----------------------------------------------------
 ����������: ������������ ��������
=====================================================
*/
if( !defined( 'DATALIFEENGINE' ) OR !defined( 'LOGGED_IN' ) ) {
  die("Hacking attempt!");
}

if($member_id['user_group'] != 1){ msg("error", $lang['addnews_denied'], $lang['db_denied']); }

$db->query( "INSERT INTO " . USERPREFIX . "_admin_logs (name, date, ip, action, extras) values ('".$db->safesql($member_id['name'])."', '{$_TIME}', '{$_IP}', '49', '')" );

$row = $db->super_query( "SELECT COUNT(*) as count FROM " . PREFIX . "_post" );

echoheader("<i class=\"icon-refresh\"></i>".$lang['opt_srebuild'], $lang['header_re_1']);

echo <<<HTML
<div class="box">
  <div class="box-header">
    <div class="title">{$lang['opt_srebuild']}</div>
  </div>
  <div class="box-content">

	<div class="row box-section">
	  {$lang['rebuild_info']}
	</div>

	<div class="row box-section">
		<div class="progress">
        <div id="progressbar" class="progress-bar progress-blue" style="width:0%;"><span></span></div>
    </div>
		{$lang['rebuild_s_1']}&nbsp;&nbsp;<input type="text" size="10" name="start_from" id="start_from" value="0">&nbsp;&nbsp;{$lang['rebuild_s_2']}
	</div>
	<div class="row box-section">
		{$lang['stat_allnews']}&nbsp;{$row['count']},&nbsp;{$lang['rebuild_count']}&nbsp;<font color="red"><span id="newscount">0</span></font>&nbsp;<span id="progress"></span>
	</div>
	<div class="row box-section">
	  <input type="submit" id="button" class="btn btn-blue" value="{$lang['rebuild_start']}"><input type="hidden" id="rebuild_ok" name="rebuild_ok" value="0">
	</div>	
   </div>
</div>
<script language="javascript" type="text/javascript">

  var total = {$row['count']};

	$(function() {

		$('#button').click(function() {

			$("#progress").ajaxError(function(event, request, settings){
			   $(this).html('{$lang['nl_error']}');
				$('#button').attr("disabled", false);
			 });

			$('#progress').html('{$lang['rebuild_status']}');
			$('#button').attr("disabled", "disabled");
			$('#button').val("{$lang['rebuild_forw']}");
			var start_count = 0;
			
			if ( $('#start_from').val() > 0 &&  $('#start_from').val() < total ) {
				start_count = $('#start_from').val();
			} else {
				start_count = $('#rebuild_ok').val();
			}
			
			senden( start_count );
			return false;
		});

	});

function senden( startfrom ){

	$.post("engine/ajax/rebuild.php?user_hash={$dle_login_hash}", { startfrom: startfrom },
		function(data){

			if (data) {

				if (data.status == "ok") {

					$('#newscount').html(data.rebuildcount);
					$('#rebuild_ok').val(data.rebuildcount);

					var proc = Math.round( (100 * data.rebuildcount) / total );

					if ( proc > 100 ) proc = 100;

					$('#progressbar').css( "width", proc + '%' );


			         if (data.rebuildcount >= total) 
			         {
			              $('#progress').html('{$lang['rebuild_status_ok']}');
			         }
			         else 
			         { 
			              setTimeout("senden(" + data.rebuildcount + ")", 1000 );
			         }


				}

			}
		}, "json").fail(function() {
						$('#progress').html('{$lang['nl_error']}');
						$('#button').attr("disabled", false);
					});

	return false;
}
</script>
HTML;

$row = $db->super_query( "SELECT COUNT(*) as count FROM " . PREFIX . "_comments" );

echo <<<HTML
<div class="box">
  <div class="box-header">
    <div class="title">{$lang['opt_crebuild']}</div>
  </div>
  <div class="box-content">

	<div class="row box-section">
	  {$lang['rebuild_cinfo']}
	</div>

	<div class="row box-section">
		<div class="progress">
        <div id="progressbar3" class="progress-bar progress-blue" style="width:0%;"><span></span></div>
    </div>
		{$lang['rebuild_s_1']}&nbsp;&nbsp;<input type="text" size="10" name="start_from3" id="start_from3" value="0">&nbsp;&nbsp;{$lang['rebuild_s_3']}
	</div>
	<div class="row box-section">
		{$lang['stat_comments']}&nbsp;{$row['count']},&nbsp;{$lang['rebuild_count']}&nbsp;<font color="red"><span id="newscount3">0</span></font>&nbsp;<span id="progress3"></span>
	</div>
	<div class="row box-section">
	  <input type="submit" id="button3" class="btn btn-blue" value="{$lang['rebuild_start']}"><input type="hidden" id="rebuild_ok3" name="rebuild_ok3" value="0">
	</div>	
   </div>
</div>
<script language="javascript" type="text/javascript">

  var total3 = {$row['count']};

	$(function() {

		$('#button3').click(function() {

			$("#progress3").ajaxError(function(event, request, settings){
			   $(this).html('{$lang['nl_error']}');
				$('#button3').attr("disabled", false);
			 });

			$('#progress3').html('{$lang['rebuild_status']}');
			$('#button3').attr("disabled", "disabled");
			$('#button3').val("{$lang['rebuild_forw']}");
			var start_count = 0;
			
			if ( $('#start_from3').val() > 0 &&  $('#start_from3').val() < total3 ) {
				start_count = $('#start_from3').val();
			} else {
				start_count = $('#rebuild_ok3').val();
			}
			
			senden_comments( start_count );
			return false;
		});

	});

function senden_comments( startfrom ) {

	$.post("engine/ajax/rebuild.php?user_hash={$dle_login_hash}", { startfrom: startfrom, area: 'comments' },
		function(data){

			if (data) {

				if (data.status == "ok") {

					$('#newscount3').html(data.rebuildcount);
					$('#rebuild_ok3').val(data.rebuildcount);

					var proc = Math.round( (100 * data.rebuildcount) / total3 );

					if ( proc > 100 ) proc = 100;

					$('#progressbar3').css( "width", proc + '%' );


			         if (data.rebuildcount >= total3) 
			         {
			              $('#progress3').html('{$lang['rebuild_status_ok']}');
			         }
			         else 
			         { 
			              setTimeout("senden_comments(" + data.rebuildcount + ")", 1000 );
			         }


				}

			}
		}, "json").fail(function() {
						$('#progress3').html('{$lang['nl_error']}');
						$('#button3').attr("disabled", false);
					});

	return false;
}
</script>
HTML;

$row = $db->super_query( "SELECT COUNT(*) as count FROM " . PREFIX . "_static WHERE allow_br !='2'" );

echo <<<HTML
<div class="box">
  <div class="box-header">
    <div class="title">{$lang['opt_statrebuild']}</div>
  </div>
  <div class="box-content">

	<div class="row box-section">
	 {$lang['rebuild_stat_info']}
	</div>
	<div class="row box-section">
		<div class="progress">
          <div id="progressbar2" class="progress-bar progress-blue" style="width:0%;"><span></span></div>
        </div>
		{$lang['stat_allstaic']}&nbsp;{$row['count']},&nbsp;{$lang['rebuild_count']}&nbsp;<font color="red"><span id="statcount">0</span></font>&nbsp;<span id="statprogress"></span>
	</div>
	<div class="row box-section">
	  <input type="submit" id="button2" class="btn btn-blue" value="{$lang['rebuild_start']}"><input type="hidden" id="rebuild_ok2" name="rebuild_ok2" value="0">
	</div>	
   </div>
</div>
<script language="javascript" type="text/javascript">

  var total2 = {$row['count']};

	$(function() {

		$('#button2').click(function() {

			$("#statprogress").ajaxError(function(event, request, settings){
			   $(this).html('{$lang['nl_error']}');
				$('#button2').attr("disabled", false);
			 });


			$('#statprogress').html('{$lang['rebuild_status']}');
			$('#button2').attr("disabled", "disabled");
			$('#button2').val("{$lang['rebuild_forw']}");
			senden_stat( $('#rebuild_ok2').val() );
			return false;
		});

	});

function senden_stat( startfrom ){

	$.post("engine/ajax/rebuild.php?user_hash={$dle_login_hash}", { startfrom: startfrom, area: 'static' },
		function(data){

			if (data) {

				if (data.status == "ok") {

					$('#statcount').html(data.rebuildcount);
					$('#rebuild_ok2').val(data.rebuildcount);

					var proc = Math.round( (100 * data.rebuildcount) / total2 );

					if ( proc > 100 ) proc = 100;

					$('#progressbar2').css( "width", proc + '%' );

			         if (data.rebuildcount >= total2) 
			         {
			              $('#statprogress').html('{$lang['rebuild_status_ok']}');
			         }
			         else 
			         { 
			              setTimeout("senden_stat(" + data.rebuildcount + ")", 1000 );
			         }


				}

			}
		}, "json");

	return false;
}
</script>
HTML;


echo <<<HTML
<div class="box">
  <div class="box-header">
    <div class="title">{$lang['opt_relrebuild']}</div>
  </div>
  <div class="box-content">

	<div class="row box-section">
	 {$lang['rebuild_rel_info']}
	</div>
	<div class="row box-section">
	  <input type="submit" id="button4" class="btn btn-blue" value="{$lang['rebuild_start']}">&nbsp;<span id="relprogress"></span>
	</div>	
   </div>
</div>
<script language="javascript" type="text/javascript">

	$(function() {

		$('#button4').click(function() {

			$('#relprogress').html('{$lang['rebuild_status']}');
			$('#button4').attr("disabled", "disabled");

			$.post("engine/ajax/rebuild.php?user_hash={$dle_login_hash}", { area: 'related' },
				function(data){
		
					if (data) {
		
						if (data.status == "ok") {
		
							$('#relprogress').html('{$lang['rebuild_status_ok']}');
		
						}
		
					}
				}, "json");

			return false;
		});

	});
</script>
HTML;

echofooter();
?>
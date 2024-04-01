<?php
global $LIONSCRIPTS, $wpdb;
require_once( dirname(__FILE__).'/../../../'.'wp-load.php' );
require_once( dirname(__FILE__).'/plg.settings.php' );
if(isset($_GET['format']) && !empty($_GET['format']))
{
	$objLionTemp = new lionscripts_plg_wib(basename(dirname(__FILE__)));
	$blocked_ips_list = $objLionTemp->get_all_blocked_ips();

	$blocked_ips_list_arr = array();
	
	if(($_GET['format'] == 'wib_pro'))
	{
		$ips = ($wpdb->get_results("SELECT * FROM ".$objLionTemp->plg_table['ip']));

		$config = array('Do-After-Block'=>get_option($objLionTemp->plg_db_var['show_to_banned_user']));

		if(!headers_sent())
		{
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=IP_Address_Blocker_Lite_Bkp_'.(date('d_M_Y')).'_In_WordPress_IP_Blocker_Pro_Format'.'.dat');
			header('Pragma: no-cache');
		}

		echo base64_encode(json_encode(array('config'=>$config, 'list_data'=>$ips)));
		exit;
	}
	else
	{
		$header = 'IP Address';
		$rows = '';

		if(isset($blocked_ips_list) && !empty($blocked_ips_list))
		{
			foreach($blocked_ips_list as $key=>$value)
			{
				$blocked_ips_list_arr[$key] = $value;
				$rows .= $value."\n";
			}
		}
		
		if(!headers_sent())
		{
			header('Content-Type: application/csv');
			header('Content-Disposition: attachment; filename=IP_Address_Blocker_Lite_Bkp_'.(date('d_M_Y')).'_In_Normal_CSV_Format'.'.csv');
			header('Pragma: no-cache');
		}

		echo $header."\n".$rows;
		exit;
	}
}
?>
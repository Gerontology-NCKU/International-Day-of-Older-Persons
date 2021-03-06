<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => '報名資訊表單 送出',
	'heading' => '新的表單送出',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => '已核取',
		'checkbox_unchecked' => '取消選取',
		'submitted_from' => '表單由此網站送出: %s',
		'submitted_by' => '訪客 IP 位址: %s',
		'too_many_submissions' => '此 IP 最近有太多送出記錄',
		'failed_to_send_email' => '傳送電子郵件失敗',
		'invalid_reCAPTCHA_private_key' => '無效的 reCAPTCHA 私密金鑰。',
		'invalid_reCAPTCHA2_private_key' => '無效的 reCAPTCHA 2.0 私密金鑰。',
		'invalid_reCAPTCHA2_server_response' => '無效的 reCAPTCHA 2.0 伺服器回應。',
		'invalid_field_type' => '不明的欄位類型「%s」。',
		'invalid_form_config' => '「%s」欄位有無效的設定。',
		'unknown_method' => '不明的伺服器要求方式'
	),
	'email' => array(
		'from' => 'em75086@email.ncku.edu.tw',
		'to' => 'em75086@email.ncku.edu.tw'
	),
	'fields' => array(
		'custom_U2999' => array(
			'order' => 1,
			'type' => 'string',
			'label' => '姓名',
			'required' => true,
			'errors' => array(
				'required' => '欄位「姓名」為必填。'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => '電子郵件',
			'required' => true,
			'errors' => array(
				'required' => '欄位「電子郵件」為必填。',
				'format' => '「電子郵件」欄位有無效的電子郵件。'
			)
		),
		'custom_U3005' => array(
			'order' => 3,
			'type' => 'string',
			'label' => '單位',
			'required' => true,
			'errors' => array(
				'required' => '欄位「單位」為必填。'
			)
		),
		'custom_U3044' => array(
			'order' => 4,
			'type' => 'string',
			'label' => '手機',
			'required' => true,
			'errors' => array(
				'required' => '欄位「手機」為必填。'
			)
		)
	)
);

process_form($form);
?>

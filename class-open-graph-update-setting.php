<?php
/**
 * Access token setting page
 * 2018/11/7 19:33 by LiweiTW
 */

function FacebookOpenGraphUpdateSettingInit() {

	add_settings_section(
		'facebook-open-graph-update-setting',
		'Facebook Open Graph Update Setting',
		'FacebookOpenGraphUpdateSettingLabelFunction',
		'writing'
	);

	add_settings_field(
		'facebook-open-graph-update-access-token',
		'Access Token',
		'FacebookOpenGraphUpdateSettingInputFunction',
		'writing',
		'facebook-open-graph-update-setting'
	);

	register_setting( 'writing', 'facebook-open-graph-update-access-token' );
}

add_action( 'admin_init', 'FacebookOpenGraphUpdateSettingInit' );

function FacebookOpenGraphUpdateSettingLabelFunction() {
	echo '<p>請輸入 {App | Secret} 作為金鑰</p>';
}

function FacebookOpenGraphUpdateSettingInputFunction() {
	$access_token = get_option( 'facebook-open-graph-update-access-token', '' );
	echo '<input name="facebook-open-graph-update-access-token" id="facebook-open-graph-update-access-token" type="password" value="' . $access_token . '">';
}

?>

<?php
/**
 * GENERAL ARRAY OPTIONS
 */

$general = array(

	'general'  => array(

		

		'general-options' => array(
			'title' => __( 'General Options', 'yith-wcwtl' ),
			'type' => 'title',
			'desc' => '',
			'id' => 'yith-wcwtl-general-options'
		),

		'enable-waiting-list' => array(
			'id'        => 'yith-wcwtl-enable',
			'name'      => __( 'Enable Waiting List', 'yith-wcwtl' ),
			'type'      => 'checkbox',
			'default'   => 'yes'
		),

		'waiting-list-message'  => array(
			'id'        => 'yith-wcwtl-form-message',
			'name'      => __( 'Notification message', 'yith-wcwtl' ),
			'desc'      => __( '', 'yith-wcwtl' ),
			'type'      => 'text',
			'default'   => __( '', 'yith-wcwtl' ),
		),

		'waiting-list-button-add'  => array(
			'id'        => 'yith-wcwtl-button-add-label',
			'name'      => __( 'Add button label', 'yith-wcwtl' ),
			'desc'      => __( '', 'yith-wcwtl' ),
			'type'      => 'text',
			'default'   => __( '', 'yith-wcwtl' ),
		),

		'waiting-list-button-leave'  => array(
			'id'        => 'yith-wcwtl-button-leave-label',
			'name'      => __( 'Remove button label', 'yith-wcwtl' ),
			'desc'      => __( '', 'yith-wcwtl' ),
			'type'      => 'text',
			'default'   => __( '', 'yith-wcwtl' ),
		),

		'waiting-list-success-msg'  => array(
			'id'        => 'yith-wcwtl-button-success-msg',
			'name'      => __( 'Successful registration message', 'yith-wcwtl' ),
			'desc'      => __( '', 'yith-wcwtl' ),
			'type'      => 'text',
			'default'   => __( '', 'yith-wcwtl' ),
		),

		'general-options-end' => array(
			'type'      => 'sectionend',
			'id'        => 'yith-wcwtl-general-options'
		),
	)
);

return apply_filters( 'yith_wcwt_panel_general_options', $general );
<?php
return array(
	'title' => '项目日志',
	'single' => '项目日志',
	'model' => 'XLog',

	// 出问题

	'columns' => array(
		'id' => array(
			'title' => 'ID',
			),
		'title' => array(
			'title' => '标题',
			),
		'content' => array(
			'title' => '内容',
			),
		'created_at',
		'updated_at'
		),

	'edit_fields' => array(
		'title' => array(
			'title' => '标题',
			),
		'content' => array(
			'title' => '内容',
			'type' => 'textarea',
			),
		),

	);
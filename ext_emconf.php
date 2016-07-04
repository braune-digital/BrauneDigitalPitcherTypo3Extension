<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Pitcher',
	'description' => 'Pitcher App (http://www.pitcher-app.com) is a webservice which allows you to easily send exceptions from your project. In contrast to classical monitoring webservices, Pitcher is able to pitch individual exceptions from projects, where Pitcher is acting like a satellite which communicates whith ground control. Register now at pitcher-app.com and create your project. After receiving the secret, the next step is installing the PHP component (or Bundle in case of using Symfony) and linking the satellite by defining the secret.',
	'category' => 'plugin',
	'author' => 'Braune Digital GmbH',
	'author_email' => 'mail@braune-digital.com',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
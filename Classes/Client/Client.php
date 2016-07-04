<?php

namespace BrauneDigital\Pitcher\Client;

use BrauneDigital\Pitcher\Client\BaseClient;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Client extends BaseClient {

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['pitcher']);
		parent::__construct($extensionConfiguration['satellite_name'], $extensionConfiguration['secret'], $extensionConfiguration['api_version'], $extensionConfiguration['pitcher_url']);
	}

	/**
	 * @param $level
	 * @param $message
	 * @param $satelliteName
	 */
	public function pitch($level, $message)
	{
		parent::pitch(
			$level,
			$message
		);
	}

}
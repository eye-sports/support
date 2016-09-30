<?php

use Agreed\Technical\Application;

abstract class ServiceProvider
{
	protected $application = null;

	public function __construct ( Application $application )
	{
		$this->application = $application;
	}

	/**
	 * Register a service in the application.
	 *
	 * @return void
	 */
	abstract public function register ( ); 
}
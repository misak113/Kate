<?php

namespace kinq\Application;
use Nette;

interface IHookContainer
{
	
	public function bind($object, $event);

	public function unbind($object, $event = null);
	
	public function notify($event, array $options = array());
}
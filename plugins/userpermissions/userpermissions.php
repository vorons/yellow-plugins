<?php
// Copyright (c) 2013-2014 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// User permissions plugin
class YellowUserpermissions
{
	const Version = "0.1.3";
	var $yellow;			//access to API
	
	// Handle plugin initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
	}
	
	// Handle permissions for changing page
	function onCheckPermissions($location, $fileName, $users)
	{
		$home = $users->getHome();
		return substru($location, 0, strlenu($home)) == $home;
	}
}

$yellow->plugins->register("userpermissions", "YellowUserpermissions", YellowUserpermissions::Version);
?>
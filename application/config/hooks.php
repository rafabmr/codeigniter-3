<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|   
|   pre_system:
|   		Called very early during system execution. Only the benchmark and hooks class have been loaded at this point. 
|   		No routing or other processes have happened.
|   
|   pre_controller:
|   		Called immediately prior to any of your controllers being called.
|   		All base classes, routing, and security checks have been done.
|   
|   post_controller_constructor:
|   		Called immediately after your controller is instantiated, but prior to any method calls happening.
|   
|   post_controller:
|   		Called immediately after your controller is fully executed.
|   
|   post_system:
|   		Called after the final rendered page is sent to the browser, at the end of system execution after the finalized data is sent to the browser.
|
*/

$hook['pre_controller'][] = array(
	'class'    => 'Auth',
	'function' => 'login',
	'filename' => 'Auth.php',
	'filepath' => 'hooks',
	'params'   => array()
);

<?php

/**
 * Binding a request coupled to an action inside the container
 * 
 * @param  string $request 		A description of a request
 * @param  Closure $action  	An action to perform on the request
 *
 * @example   					when ( 'i want to see the dashboard', then ( apply ( a ( function ( dependency $dependency ) { do something here } ))));
 * @return void          
 */
function when ( $request, Closure $action )
{
	global $application; 	// defined in index.php
	$application->share ( $request, $action );
}

/**
 * The following functions don't actually do anything.
 * They are purely for readability purposes.
 */

function then ( $action )
{
	return $action;
}

function apply ( $action )
{
	return $action;
}

function a ( $action )
{
	return $action;
}
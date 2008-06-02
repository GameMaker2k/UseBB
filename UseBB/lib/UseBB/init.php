<?php

/*
	This file is part of UseBB.

	UseBB is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	UseBB is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with UseBB.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * UseBB initialization procedure.
 *
 * @package UseBB
 * @copyright Copyright (C) 2003-2008 Contributors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License
 * @version $Rev$
 *
 * @author Dietrich Moerman <dietrich@usebb.net>
 */

// Exit when called directly in browser
if ( !defined('USEBB_LIB_USEBB') )
{
	exit();
}

error_reporting(E_ALL | E_STRICT);

// Require the UseBB class
require USEBB_LIB_USEBB . '/UseBB.php';

// Register UseBB::autoload() as an autoload function
spl_autoload_register(array('UseBB', 'autoload'));

// Process the request
new UseBB();
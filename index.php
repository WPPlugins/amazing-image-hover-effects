<?php 
	
	/*
	Plugin Name: Amazing Image Hover Effects
	Description: This plugin will allow you to add beautiful and amazing hover effects to your images.
	Plugin URI: http://webdeveocean.com/amazing-image-hover-effects
	Author: Labib Ahmed
	Author URI: http://webdevocean
	Version: 1.0
	License: GPL2
	Text Domain: wdo-amazing-hover
	
	*/
	
	/*
	
	    Copyright (C) 2015  Labib Ahmed  labib@najeebmediagroup.com
	
	    This program is free software; you can redistribute it and/or modify
	    it under the terms of the GNU General Public License, version 2, as
	    published by the Free Software Foundation.
	
	    This program is distributed in the hope that it will be useful,
	    but WITHOUT ANY WARRANTY; without even the implied warranty of
	    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	    GNU General Public License for more details.
	
	    You should have received a copy of the GNU General Public License
	    along with this program; if not, write to the Free Software
	    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	*/
	include_once('plugin.class.php');
	if (class_exists('WDO_Amazing_Hover')) {
		$object = new WDO_Amazing_Hover;
	}
 ?>
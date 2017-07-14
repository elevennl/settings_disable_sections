<?php

/*
 +-----------------------------------------------------------------------+
 | Copyright (C) 2017, Carlo Vollebregt                                  |
 |                                                                       |
 | Licensed under the GNU General Public License version 3 or            |
 | any later version with exceptions for skins & plugins.                |
 | See the README file for a full license statement.                     |
 |                                                                       |
 | PURPOSE:                                                              |
 |   remove settings sections                                            |
 +-----------------------------------------------------------------------+
 | Author: Carlo Vollebregt <carlovollebregt@eleven.nl>                  |
 +-----------------------------------------------------------------------+
*/

/**
 * settings_disable_sections plugin
 */
class settings_disable_sections extends rcube_plugin
{

	public $task = 'settings';

	/**
	 * initialize plugin
	 */
	public function init()
	{
		$this->add_hook('preferences_sections_list',array($this, 'disable_sections'));
	}

	/**
	 * @param $args
	 * @return mixed
	 */
	public function disable_sections($args)
	{
		// get sections to disable from config
		$disable_sections = rcmail::get_instance()->config->get('settings_disable_sections', array());

		// go trough all sections provided by the hook and remove the ones that should be disabled according to the config
		foreach ($args["list"] as $section => $value) {
			if (in_array($section, $disable_sections)) {
				unset($args['list'][$section]);
			}
		}

		return($args);
	}
}

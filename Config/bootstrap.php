<?php
	Croogo::hookAdminMenu('ClearCache');


CroogoNav::add('sidebar', 'settings.children.clearcache', array(

			'title' => __d('clear_cache', 'Clear Cache'),
			'url' => array(
				'admin' => true,
				'plugin' => 'clear_cache',
				'controller' => 'clear_cache',
				'action' => 'admin_clear',
				
			),
			'weight' => 100,
));

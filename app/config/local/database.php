<?php

return array(
    'default' => 'pgsql',

    'connections' => array(
        'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'examples',
			'username' => 'examples',
			'password' => 'examples',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),
    ),
);

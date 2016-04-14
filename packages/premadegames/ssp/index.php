<?php

use Pagekit\Application;

return [
    'name' => 'ssp',
    'type' => 'extension',
    'main' => function(Application $app) {
        // Bootstrap code
    },
	'widgets' => [
		'widgets/buttons.php'
	],
	'resources' => [
		'premadegames/ssp:' => ''
	],
    'autoload' => [
        'Premadegames\\Ssp\\' => 'src'
    ]
];
?>
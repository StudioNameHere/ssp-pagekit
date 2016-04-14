<?php

return [
    'name' => 'premadegames/widget-buttons',

    'label' => 'Social Share Privacy',

    'render' => function ($widget) use ($app) {
        return $app->view('premadegames/ssp:/views/widget-buttons.php', compact('widget'));
    }
];

?>
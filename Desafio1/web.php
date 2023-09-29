<?php
'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [

        'funcionario/create' => 'funcionario/create',
        'funcionario/update/<id:\d+>' => 'funcionario/update',

        'cargo/create' => 'cargo/create',
        'cargo/update/<id:\d+>' => 'cargo/update',
        
    ],
],

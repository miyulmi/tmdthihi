<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp/htdocs/tmdthihi/user/config/plugins/email.yaml',
    'modified' => 1513140314,
    'data' => [
        'enabled' => true,
        'from' => 'phannuthoaimy.sb@gmail.com',
        'to' => 'phannuthoaimy.sb@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'phannuthoaimy.sb@gmail.com',
                'password' => 'Chetchac123'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];

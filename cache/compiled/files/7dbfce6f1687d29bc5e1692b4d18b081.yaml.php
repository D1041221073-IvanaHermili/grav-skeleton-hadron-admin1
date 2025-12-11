<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/plugins/healthcheck/healthcheck.yaml',
    'modified' => 1764176807,
    'size' => 274,
    'data' => [
        'enabled' => true,
        'route' => '/health',
        'info' => [
            'status_code' => true,
            'status_message' => true,
            'timestamp' => true,
            'environment' => false,
            'grav_version' => false,
            'php_version' => false,
            'custom' => [
                'nested.key' => 'static value'
            ]
        ],
        'config' => [
            'timezone' => 'system.timezone',
            'site.title' => 'site.title'
        ]
    ]
];

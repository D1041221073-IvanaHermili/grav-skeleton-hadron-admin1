<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/config/scheduler.yaml',
    'modified' => 1764176804,
    'size' => 447,
    'data' => [
        'status' => [
            'tntsearch-index' => 'enabled',
            'rclone-backup' => 'enabled',
            'cache-purge' => 'enabled',
            'cache-clear' => 'enabled',
            'datenbackup' => 'enabled',
            'systembackup' => 'enabled'
        ],
        'custom_jobs' => [
            'rclone-backup' => [
                'command' => 'scripts/rclone-backup.sh',
                'args' => 'CrabstonWebsiteBackup:hadron-demo',
                'at' => '0 1 * * *',
                'output' => 'logs/rclone-backup.out',
                'output_mode' => 'append',
                'email' => NULL
            ]
        ]
    ]
];

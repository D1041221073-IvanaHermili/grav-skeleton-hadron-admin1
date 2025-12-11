<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\grav-skeleton-hadron-admin1\\user\\plugins\\feed/blueprints/feed.yaml',
    'modified' => 1764176806,
    'size' => 469,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.feed.limit' => [
                                    'type' => 'text',
                                    'label' => 'Feed count',
                                    'default' => 10,
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'header.feed.title' => [
                                    'type' => 'text',
                                    'label' => 'Feed title'
                                ],
                                'header.feed.description' => [
                                    'type' => 'text',
                                    'label' => 'Feed description'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

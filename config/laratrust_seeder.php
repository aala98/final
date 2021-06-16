<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'super' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'otorhinolaryngologie' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'ophtalmologie' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'sychiatrie' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'orthopédie' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'neurologie' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'pediatrie' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'dentiste' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'medecins' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'ingénieurs' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'notaire' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Avocats' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'

        ],
        'user' => [
            'profile' => 'r,u',
        ],

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

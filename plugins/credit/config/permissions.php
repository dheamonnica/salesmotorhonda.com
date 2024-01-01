<?php

return [
    [
        'name' => 'Credit',
        'flag' => 'credit.list',
    ],
    [
        'name' => 'Create',
        'flag' => 'credit.create',
        'parent_flag' => 'credit.list',
    ],
    [
        'name' => 'Edit',
        'flag' => 'credit.edit',
        'parent_flag' => 'credit.list',
    ],
    [
        'name' => 'Delete',
        'flag' => 'credit.delete',
        'parent_flag' => 'credit.list',
    ],
];
<?php
return [
    'sidemenu' => [
        [
            'title' => 'Users',
            'slug' => 'users',
            'url' => env('APP_URL').'/users',
           
        ],
        [
            'title' => 'Stores',
            'slug' => 'stores',
            'url' => env('APP_URL').'/stores',
        
        ],
         [
            'title' => 'Products',
            'slug' => 'products',
            'url' => env('APP_URL').'/products',
           
        ],
        [
            'title' => 'categories',
            'slug' => 'categories',
            'url' => env('APP_URL').'/categories',
           
        ],
        [
            'title' => 'Orders',
            'slug' => 'orders',
            'url' => env('APP_URL').'/orders',
           
        ],
    ]
];
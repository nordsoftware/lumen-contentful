<?php

return [
    'api_key'                  => env('CONTENTFUL_API_KEY'),
    'space_id'                 => env('CONTENTFUL_SPACE_ID'),
    'environment_id'           => env('CONTENTFUL_ENVIRONMENT_ID', 'master'),
    'preview'                  => env('CONTENTFUL_PREVIEW', false),
    'default_locale'           => env('CONTENTFUL_DEFAULT_LOCALE'),
    'low_memory_resource_pool' => env('CONTENTFUL_LOW_MEMORY_RESOURCE_POOL', false),
];

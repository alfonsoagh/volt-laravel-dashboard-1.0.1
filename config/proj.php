<?php

return [
    // Slug configurable del proyecto para prefijar rutas: /p/<slug>
    // Personaliza vía entorno con CETAM_PROJ_SLUG
    'slug' => env('CETAM_PROJ_SLUG', 'sintek'),

    // (Opcional) Prefijo base para nombres de ruta, por convención 'proj'
    'route_name_prefix' => env('CETAM_PROJ_ROUTE_NAME_PREFIX', 'sintek'),

    // Código corto del proyecto (2 letras)
    'code' => env('CETAM_PROJ_CODE', 'ST'),
];

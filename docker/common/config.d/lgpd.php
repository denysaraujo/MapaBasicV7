<?php

use MapasCulturais\i;

return [
    'module.LGPD' => [
        'termsOfUsage'=>[
            'title'=> i::__('Termos de Uso'), 
            'text'=> file_get_contents(__DIR__ . '/lgpd-terms/terms-of-usage.html'),
            'buttonText' => i::__('Aceito os termos de uso')
        ],
        'privacyPolicy' => [
            'title'=>  i::__('Política de Privacidade do Mapa Cultural'),
            'text'=> file_get_contents(__DIR__ . '/lgpd-terms/privacy-policy.html'),
            'buttonText' => i::__('Aceito as políticas de privacidade')
        ],
        'imagesUse' => [
            'title'=>  i::__('Autorização de uso de imagem'),
            'text'=> file_get_contents(__DIR__ . '/lgpd-terms/images-use.html'),
            'buttonText' => i::__('Autorizo o uso de imagem')
        ],
    ]
];
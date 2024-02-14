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
            'title'=>  i::__('Política de Privacidade'),
            'text'=> file_get_contents(__DIR__ . '/lgpd-terms/privacy-policy.html'),
            'buttonText' => i::__('Aceito as políticas de privacidade')
        ],
        'imageOfUsage' => [
            'title'=>  i::__('Autorização de Uso de Imagem'),
            'text'=> file_get_contents(__DIR__ . '/lgpd-terms/image-use.html'),
            'buttonText' => i::__('Autorizo o uso de imagem')
        ],
    ]
];
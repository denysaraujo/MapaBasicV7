<?php 

use MapasCulturais\i;

return [
    'app.siteName' => 'Mapas Culturais Base Project V7',
    'app.siteDescription' => 'O Mapas Culturais é uma plataforma colaborativa que reúne informações sobre agentes, espaços, eventos, projetos culturais e oportunidades',

    // Define o tema ativo no site principal. Deve ser informado o namespace do tema e neste deve existir uma classe Theme.
    'themes.active' => 'MapasCulturais\Themes\BaseV2',

    // Ids dos selos verificadores. Para utilizar múltiplos selos informe os ids separados por vírgula.
    'app.verifiedSealsIds' => '1', 

    'app.lcode' => env('APP_LCODE', 'pt_BR,es_ES'),

    'registration.autosaveTimeout' => env('REGISTRATION_AUTOSAVE_INTERVAL', MINUTE_IN_SECONDS * 1000),    

    'ini.set' => json_decode(env('PHP_INI_SET', '[]'))
    
    //'homeHeader.banner' => 'img/banner-caderno-lpg.jpg',
    //'homeHeader.bannerLink' => 'https://mapacultural.pa.gov.br/files/agent/7/caderno-de-orientacoes-pcac-27-09-2023.pdf',
    //'homeHeader.downloadableLink' => true,
];
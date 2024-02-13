<?php

$config_plugins = [

    'plugins' => [

        'SettingsPb' => [

            'namespace' => 'SettingsPb',

            'config' => [

                'agent_required_fields' => [ // Obrigatoriedade dos Campos dos agentes individuais

                    'emailPrivado' => true,

                    'telefone1' => true,

                    'En_Estado' => true,

                    'En_Municipio' => true,

                ],

                'agent1_required_fields' => [ // Obrigatoriedade dos Campos dos agentes individuais

                    'nomeCompleto' => true,

                    'genero' => true,

                    'cpf' => true,

                    'raca' => true,

                ],

                //"title_home" => "",

                //"images_home" => ["homeContent/img/edital_539.png"],

                //"text_home" => "",

                //"images_size_home" => "60%",

                //"action_home_text" => 'Acessar edital',

                //"action_home_link" => 'https://mapacultural.pb.gov.br/oportunidade/539/',

            ]

        ],

        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],

        'MapasBlame' => [

            'namespace' => 'MapasBlame',

            'config' => [

                'request.logData.PATCH' => function ($data) {

                    return $data;

                },

            ]

        ],

        "MapasNetwork" => [

            "namespace" => "MapasNetwork",

            "config" => [

                'nodes' => explode(",", env("MAPAS_NETWORK_NODES", "")),

                "nodeSlug" => env("MAPAS_NETWORK_SLUG", ($_SERVER["HOSTNAME"] ?? parse_url(\MapasCulturais\App::i()->baseUrl, PHP_URL_HOST))),

                'filters' => [

                    'agent' => [ 'En_Estado' => 'PB' ],

                    'space' => [ 'En_Estado' => 'PB' ],

                ]

            ]

        ],

        "MetadataKeyword" => [

            "namespace" => "MetadataKeyword",

            "config" => [

                'location' => ['En_Municipio', 'En_Nome_Logradouro', 'En_Bairro', 'En_Estado']

            ]

        ]

    ]

];


if(!env("MAPAS_NETWORK_ENABLED", false)){

    unset($config_plugins['plugins']['MapasNetwork']);

}


return $config_plugins;

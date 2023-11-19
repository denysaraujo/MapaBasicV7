<?php

return [
    'plugins' => [
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'SettingsPa' => [
            'namespace' => 'SettingsPa',
            'config' => [
                'agent_required_fields' => [
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
            ]
        ],        
    ]
];
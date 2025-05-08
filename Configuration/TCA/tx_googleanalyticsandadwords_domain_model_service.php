<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:acceptrics/Resources/Private/Language/locallang_db.xlf:tx_acceptrics_typo3_domain_model_service',
        'label' => 'service_id',
        'iconfile' => 'EXT:acceptrics/Resources/Public/Icons/Extension.svg',
    ],
    'columns' => [
        'service_id' => [
            'label' => 'LLL:EXT:acceptrics/Resources/Private/Language/locallang_db.xlf:tx_acceptrics_typo3_domain_model_service.service_id',
            'description' => 'Acceptrics Account ID (abcdefg)',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'service_id'],
    ],
];
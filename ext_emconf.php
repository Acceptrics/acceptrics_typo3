<?php
/***************************************************************
 * Extension Manager/Repository config file for ext "acceptrics_typo3".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
  'title' => 'Acceptrics Typo3',
  'description' => 'An extension to install the Acceptrics Banner',
  'category' => 'plugin',
  'author' => 'Acceptrics Support',
  'author_company' => 'Acceptrics',
  'author_email' => 'support@acceptrics.com',
  'state' => 'stable',
  'clearCacheOnLoad' => true,
  'version' => '1.0.0',
  'constraints' => [
    'depends' => [
      'typo3' => '10.4.0-11.5.99',
    ],
    'conflicts' => [],
    'suggests' => [],
  ],
  'autoload' => [
    'psr-4' => [
      'Acceptrics\\Acceptrics_Typo3\\' => 'Classes'
    ],
  ],
];
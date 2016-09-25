<?php
 return array (
  'class' => 'CDbConnection',
  'connectionString' => 'mysql:host=localhost;port=3306;dbname=spla',
  'username' => 'root',
  'password' => 'root',
  'emulatePrepare' => true,
  'charset' => 'utf8',
  'enableParamLogging' => defined('YII_DEBUG') && YII_DEBUG ? true : 0,
  'enableProfiling' => defined('YII_DEBUG') && YII_DEBUG ? true : 0,
  'schemaCachingDuration' => 108000,
  'tablePrefix' => 'yupe_',
  'pdoClass' => 'yupe\\extensions\\NestedPDO',
);

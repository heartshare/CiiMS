<?php return array(
    'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name' => NULL,
    'preload' => array(
        'cii',
        'bootstrap',
    ),
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.*',
    ),
    'modules' => array(
        'admin',
    ),
    'components' => array(
        'cii' => array(
            'class' => 'ext.cii.components.CiiBase'
        ),
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap',
            'responsiveCss' => true
        ),
        'clientScript' => array(
            'class' => 'ext.minify.EClientScript',
            'combineScriptFiles'    => true,
            'combineCssFiles'       => true,
            'compressHTML'          => true
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'session' => array(
            'autoStart' => true,
            'sessionName' => 'CiiMS'
        ),
        'urlManager' => array(
            'class' => 'CiiURLManager',
            'cache' => true,
            'urlFormat' => 'path',
            'showScriptName' => false
        ),
        'db' => array(
            'class' => 'CDbConnection',
            'connectionString' => NULL,
            'emulatePrepare' => true,
            'username' => NULL,
            'password' => NULL,
            'charset' => 'utf8',
            'schemaCachingDuration' => '3600',
            'enableProfiling' => true,
        ),
        'cache' => array(
            'class' => 'CFileCache',
        ),
    ),
    'params' => array(
        'yiiPath' => NULL,
        'encryptionKey' => NULL,
    ),
);
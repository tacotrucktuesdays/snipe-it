<?php

/*
 |--------------------------------------------------------------------------
 | DO NOT EDIT THIS FILE DIRECTLY.
 |--------------------------------------------------------------------------
 | This file reads from your .env configuration file and should not
 | be modified directly.
*/


return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. A "local" driver, as well as a variety of cloud
    | based drivers are available for your choosing. Just store away!
    |
    | Supported: "local", "ftp", "s3", "rackspace"
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root'   => storage_path('app'),
        ],

        'ftp' => [
            'driver'   => 'ftp',
            'host'     => env('FTP_HOST', 'ftp.yourhost.com'),
            'username' => env('FTP_USERNAME', 'ftp-user'),
            'password' => env('FTP_PASSWORD', 'ftp-pass'),
            'port'     => env('FTP_PORT', '21'),
            'root'     => env('FTP_ROOT', ''),
            'passive'  => env('FTP_PASSIVE', true),
            'ssl'      => env('FTP_SSL', true),
            'timeout'  => env('FTP_TIMEOUT', 30),
        ],

        'sftp' => [
            'driver' => 'sftp',
            'host'     => env('SFTP_HOST', 'sftp.yourhost.com'),
            'username' => env('SFTP_USERNAME', 'sftp-user'),
            'password' => env('SFTP_PASSWORD', 'sftp-pass'),
            'port'     => env('SFTP_PORT', '22'),
            'root'     => env('SFTP_ROOT', ''),
            'timeout'  => env('SFTP_TIMEOUT', 30),
        ],

        's3' => [
            'driver' => 's3',
            'key'    => env('AWS_KEY', null),
            'secret' => env('AWS_SECRET', null),
            'region' => env('AWS_REGION', null),
            'bucket' => env('AWS_BUCKET', null),
        ],


    ],

];

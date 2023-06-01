<?php
//  fichier de config de l'app

session_start();

const CONFIG=[
    'db'=>[
        'HOST'=>'localhost',
        'PORT'=>'3306',
        'NAME'=>'startisland',
        'USER'=>'root',
        'PWD'=>''
    ],

    'app'=>[
        'name'=>'STARISLAND',
        'projecturl'=>'http://localhost/PHPexosSara/star_island/crud/'
    ]

];

const BASE_PATH='/PHPexosSara/star_island/crud/';


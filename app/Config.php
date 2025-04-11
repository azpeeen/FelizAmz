<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$_SESSION['hash'] = md5(rand(5, 15));
$_SESSION['data_site'] = date('Y-m-d H:i:s');

//const PAGINA = $_SERVER['REQUEST_URI'];
$pagina = $_SERVER['REQUEST_URI'];
$pagina = explode("/",$pagina);
$pagina = $pagina[2];
//var_dump($pagina);
//exit();


const APP_NAME = 'FelizAmz';
const APP_URL = $_SERVER['HTTP_HOST'] == 'teste.amzmp.com.br' ? 'https://teste.amzmp.com.br/FelizAmz' : 'https://FelizAmz.com.br';
const APP_URL = 'https://teste.amzmp.com.br/FelizAmz';
//const APP_URL = 'http://localhost/FelizAmz';


const ASSETS = APP_URL . '/assets/';

const DATA_LAYER_CONFIG = [
    "driver" => "mysql",

    // LOCAL
    // "host" => "localhost",
    // "port" => "3306",
    // "dbname" => "aunare",
    // "username" => "root",
    // "passwd" => "",

    //TESTE
    "host" => "162.215.128.211",
    "port" => "3306",
    "dbname" => "amzmptest_aunare",
    "username" => "amzmptest_aunare",
    "passwd" => ";UD8k&p%ZXS]",

    // PRODUÇÃO
    // "host" => "162.215.128.211",
    // "port" => "3306",
    // "dbname" => "amzmptest_aunare",
    // "username" => "amzmptest_aunare",
    // "passwd" => ";UD8k&p%ZXS]",

    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];
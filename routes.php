<?php
require_once CONFIG_DIR . '/routers.php';

$urlParts = parse_url($_SERVER['REQUEST_URI']);

$url = $urlParts['path'];
$https = isset($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] === 'https' ? true : false; # not found

$indexPHPPosition = strpos($url, 'index.php');
$baseUrl = $url;

logData('INFO', 'Starte Routing');

if (false !== $indexPHPPosition) {
    $baseUrl = substr($baseUrl, 0, $indexPHPPosition);
    logData('INFO', 'Es gibt eine index.php in URL');
}


if (substr($baseUrl, -1) !== '/') {
    logData('INFO','Die $baseUrl variable hat kein slash am Ende, hänge eins an');
    $baseUrl .= '/';
}

define('BASE_URL', $baseUrl);
$projectUrl =  'http://' . $_SERVER['HTTP_HOST'] . $baseUrl;

$route = null;

if ($indexPHPPosition) {
    logData('INFO','index.php steht in der URL, entferne es aus der Route');
    $route = substr($url, $indexPHPPosition);
    $route = str_replace('index.php', '', $route);
} else {
    logData('INFO','index.php steht nicht in der URL, entferne es aus der Route');
    $route = $url;
}

# routers check
foreach($routers as $value) {
    if ($route === $value['path']) {
        logData('INFO',"Wir sind auf der URL $route");
        requireOnce($value['component']);
        logEnd();
        exit(); 
    } 
};

logData('WARNING','URL wurde nicht gefunden',['route'=>$route]);
http_response_code(404);
require_once TEMPLATES_DIR.'/404.php';
logEnd();
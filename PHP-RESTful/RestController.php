<?php

require_once("SiteRestHandler.php");

/**
 * RESTful Web Service 控制器
 */

$view = "";

if (isset($_GET['view'])) {
    $view = $_GET['view'];
}

/**
 * RESTful service 控制器
 * URL 映射
 */
switch ($view) {
    case "all":
        // /site/list

        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getAllSites();
        break;

    case "single":
        // /site/show/<id>/
        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getSite($_GET['id']);
        break;

    case "":
        //404 Not Found;
        break;
}
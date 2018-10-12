<?php
/**
 * Created by PhpStorm.
 * User: PhpZhi
 * Date: 2018/10/11
 * Time: 10:53
 */

/**
 * REST（英文：Representational State Transfer，简称REST) ，指的是一组架构约束条件和原则。
 * 符合REST设计风格的Web API称为RESTful API。它从以下三个方面资源进行定义：

 *  1、直观简短的资源地址：URI，比如：http://example.com/resources/。
 *  2、传输的资源：Web服务接受与返回的互联网媒体类型，比如：JSON，XML，YAM等。
 *  3、对资源的操作：Web服务在该资源上所支持的一系列请求方法（比如：POST，GET，PUT或DELETE）。

本教程我们将使用 PHP(不用框架) 来创建一个 RESTful web service，在文章末尾你可以下载本章节使用到的代码。

通过本教程你将学习到以下内容：
 *  1、创建一个 RESTful Webservice。
 *  2、使用原生 PHP, 不依赖任何框架。
 *  3、URI 模式需要遵循 REST 规则。
 *  4、RESTful service 接受与返回的格式可以是 JSON, XML等。
 *  5、根据不同情况响应对应的 HTTP 状态码。
 *  6、演示请求头的使用。
 *  7、使用 REST 客户端来测试 RESTful web service。
 */


/**
 * RESTful Webservice 实例
 * Site.php RESTful服务类
 */


/**
 * RESTful Services URI 映射
 * RESTful Services URI 应该设置为一个直观简短的资源地址。Apache 服务器的 .htaccess 应设置好对应的 Rewrite 规则。

本实例我们将使用两个 URI 规则：
 * 1、获取所有站点列表：http://localhost/restexample/site/list/
 * 2、使用 id 获取指定的站点，以下 URI 为获取 id 为 3 的站点：http://localhost/restexample/site/list/3/
 *
 * 项目的 .htaccess 文件配置规则如下所示：
 * # 开启 rewrite 功能
Options +FollowSymlinks
RewriteEngine on

# 重写规则
RewriteRule ^site/list/$   RestController.php?view=all [nc,qsa]
RewriteRule ^site/list/([0-9]+)/$   RestController.php?view=single&id=$1 [nc,qsa]
 */


/**
 * RESTful Web Service 控制器
 * 在 .htaccess 文件中，我们通过设置参数 'view' 来获取 RestController.php 文件中对应的请求，通过获取 'view' 不同的参数来分发到不同的方法上。RestController.php 文件代码如下：
 */


/**
 * 简单的 RESTful 基础类
 * 以下提供了 RESTful 的一个基类，用于处理响应请求的 HTTP 状态码，SimpleRest.php 文件代码如下：
 */


/**
 * RESTful Web Service 处理类
 * 以下是一个 RESTful Web Service 处理类 SiteRestHandler.php，继承了上面我们提供的 RESTful 基类，类中通过判断请求的参数来决定返回的 HTTP 状态码及数据格式，实例中我们提供了三种数据格式： "application/json" 、 "application/xml" 或 "text/html"：

SiteRestHandler.php 文件代码如下:
 */


/**
 * 访问地址
 * localhost/RESTful-API/site/list/
 * localhost/RESTful-API/site/list/3/
 */
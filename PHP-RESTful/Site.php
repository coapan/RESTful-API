<?php
/**
 * RESTful Webservice 实例
 */

class Site
{
    private $sites = [
        1 => 'TaoBao',
        2 => 'Google',
        3 => 'Baidu',
        4 => 'Runoob',
        5 => 'Weibo',
        6 => 'Sina',
    ];

    public function getAllSite()
    {
        return $this->sites;
    }

    public function getSite($id)
    {
        $site = [
            $id => ($this->sites[$id] ? $this->sites[$id] : $this->sites[1])
        ];
        return $site;
    }
}
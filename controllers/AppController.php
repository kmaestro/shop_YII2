<?php
/**
 * Created by PhpStorm.
 * User: polis
 * Date: 28.09.2016
 * Time: 21:35
 */

namespace app\controllers;

use yii\web\Controller;


class AppController extends Controller
{
    protected function setMeta($title = null, $keywords = null, $description = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(["name" => "keywords", 'content' => "$keywords"]);
        $this->view->registerMetaTag(["name" => "description", 'content' => "$description"]);
    }
}
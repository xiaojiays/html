<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{
    public $layout = 'home';

    public function notFound()
    {
        return '404 not found';
    }
}

<?php

namespace console\controllers;

use yii\console\Controller;

class ConsoleGreetingsController extends Controller
{
    public function actionIndex()
    {
        $this->stdout("Hello from console controller");
    }
}
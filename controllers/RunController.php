<?php

namespace app\controllers;

use Yii;
use app\controllers\BaseController;
use app\models\Text;

class RunController extends BaseController
{
    public $layout = false;
    public $enableCsrfValidation = false;

    public function actionHtml()
    {
        $tp = Yii::$app->request->get('t');

        if (trim($tp) === '') {
            return $this->notFound();
        }

        $content = Text::find()->where(['id' => $tp])->one();
        $content = $content->content;

        return $this->render('html', [
            'content' => $content,
        ]);
    }

    public function actionColor()
    {
        $tp = Yii::$app->request->get('t');

        if (trim($tp) === '') {
            return $this->notFound();
        }

        $content = Text::find()->where(['id' => $tp])->one();
        $content = $content->content;

        return $this->render('color', [
            'content' => $content,
        ]);
    }

    public function actionShow()
    {
        $tp = Yii::$app->request->get('t');

        if (trim($tp) === '') {
            return $this->notFound();
        }

        $content = Text::find()->where(['id' => $tp])->one();
        $content = $content->content;

        return $this->render('show', [
            'content' => $content,
        ]);
    }

    public function actionPhp()
    {
        $tp = Yii::$app->request->get('t');

        if (trim($tp) === '') {
            return $this->notFound();
        }

        $content = Text::find()->where(['id' => $tp])->one();
        $content = $content->content;

        return $this->render('php', [
            'content' => $content,
        ]);
    }

    public function actionExecute()
    {
        $tp = Yii::$app->request->get('t');

        if (trim($tp) === '') {
            return '';
        }

        $content = Text::find()->where(['id' => $tp])->one();
        $content = $content->content;

        return $content;
    }

    public function actionT1()
    {
        $tp = Yii::$app->request->get('t');

        if (trim($tp) === '') {
            return '';
        }

        $content = Text::find()->where(['id' => $tp])->one();
        $content = $content->content;

        return $this->render('t1', [
            'content' => $content,
        ]);
    }

    public function actionT2()
    {
        $tp = Yii::$app->request->get('t');

        if (trim($tp) === '') {
            return '';
        }

        $content = Text::find()->where(['id' => $tp])->one();
        $content = $content->content;

        return $this->render('t2', [
            'content' => $content,
        ]);
    }

    public function actionT3()
    {
        $tp = Yii::$app->request->get('t');

        if (trim($tp) === '') {
            return '';
        }
        $content = Text::find()->where(['id' => $tp])->one();
        $content = $content->content;
        return $content;
    }

    public function actionCompile()
    {
            header("Content-type:application/json");
            return json_encode([
                'code' =>
                '<!DOCTYPE html> ↵<html> ↵<body> ↵↵<?php ↵echo "Hello World!"; ↵?> ↵↵</body> ↵</html>',
'errors'
 =>
"",
'langid'
=>
"3",
'output'
=>
"<!DOCTYPE html> ↵<html> ↵<body> ↵↵Hello World! ↵↵</body> ↵</html>",
'time'
=>
" .03↵"
            ]);
    }
}

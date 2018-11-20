<?php

namespace app\controllers;

use Yii;
use app\controllers\BaseController;
use app\models\Menu;
use app\models\Article;

class IndexController extends BaseController
{
    public function actionIndex()
    {
        $menus = Menu::getIndexMenus();

        $articles = [];

        foreach ($menus as $m) {
            $articles[$m->id] = Article::getNewest($m->id);
        }

        return $this->render('index', [
            'menus' => $menus,
            'articles' => $articles,
        ]);
    }

    public function actionShow()
    {
        $uname = Yii::$app->request->get('uname');
        $suname = Yii::$app->request->get('suname');
        $uuid = Yii::$app->request->get('uuid');

        $menu = Menu::getMenuByUname($uname);

        if (!$menu) {
            return $this->notFound();
        }

        $menus = Menu::getSubMenus($menu->id);

        if (trim($suname) === '') {
            $subMenu = Menu::getSubMenu($menu->id);
        } else {
            $subMenu = Menu::getMenuByUname($suname);
        }

        if (!$subMenu) {
            return $this->notFound();
        }

        if (trim($uuid) === '') {
            $article = Article::getFirst($subMenu->id);
        } else {
            $article = Article::getArticleByUuid($uuid);
        }

        if (!$article) {
            return $this->notFound();
        }

        $prev = $this->getPrev($article);
        $next = $this->getNext($article);

        $params = [
            'menu' => $menu,
            'menus' => $menus,
            'subMenu' => $subMenu,
            'article' => $article,
            'prev' => $prev,
            'next' => $next,
        ];

        if ($subMenu->type == 0) {
            $params['list'] = Article::articleList($subMenu->id);
            $tp = 'show';
        } else if ($subMenu->type == 1) {
            $page = Yii::$app->request->get('page');
            $page = $page < 1 ? 1 : $page;
            $params['list'] = Article::articlePageList($subMenu->id, $page);
            $tp = 'show1';
        }

        return $this->render($tp, $params);
    }

    public function actionOther()
    {
        $t = Yii::$app->request->get('t');

        if (trim($t) === '') {
            return $this->notFound();
        }

        $article = Article::find()->where(['uuid' => $t])->one();
        
        $prev = $this->getPrev($article);
        $next = $this->getNext($article);

        $menu = Menu::find()->where(['id' => $article->top_menu_id])->one();
        $subMenu = Menu::find()->where(['id' => $article->menu_id])->one();
        $menus = Menu::getSubMenus($menu->id);

        return $this->render('show', [
            'menu' => $menu,
            'subMenu' => $subMenu,
            'menus' => $menus,
            'article' => $article,
            'list' => Article::articleList($subMenu->id),
            'prev' => $prev,
            'next' => $next,
        ]);
    }

    private function getPrev($article)
    {
        return Article::find()->where(['top_menu_id' => $article->top_menu_id, 'menu_id' => $article->menu_id])
            ->andWhere(['<', 'id', $article->id])->andWhere(['<>', 'uname', ''])->orderBy(['id' => SORT_DESC])->one();            
    }

    private function getNext($article)
    {
        return Article::find()->where(['top_menu_id' => $article->top_menu_id, 'menu_id' => $article->menu_id])
            ->andWhere(['>', 'id', $article->id])->andWhere(['<>', 'uname', ''])->one();            
    }
}

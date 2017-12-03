<?php

namespace app\controllers;


use yii\web\Controller;
use app\models\Institution;

class InstitutionController extends Controller
{
    public function actionIndex()
    {
        $query = Institution::find();

        return $this->render('index', [
           'institutions' => $query->all()
        ]);
    }
}
<?php

namespace frontend\controllers;

use frontend\component\CustomEvent;
use yii\web\Controller;
// 

/**
 * MainExam controller
 */
class MainExamController extends Controller
{

    public function actionQuestionAnswer() //main-exam/question-answer
    {
        $this->layout = 'main1';
        return $this->render('question-answer');
    }

    public function actionTest_copy() // main-exam/question_answer
    {


        $this->layout = 'main2';

        return $this->render('test_copy');
    }

    public function actionHi_bro()
    {
        return $this->render('review');
    }
}

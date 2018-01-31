<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 9:34
 */

namespace backend\controllers;

use common\models\HiUserMerge;
use yii\data\Pagination;
use yii\widgets\LinkPager;

class HiUserController extends BaseController
{
    public function actionIndex(){
        $query = HiUserMerge::find()->andWhere(1);
        $searchData = $this->searchForm($query, ['UserName', 'ReadLevel', 'ylmguid','Mobile']);
        //注册时间
        if(!empty($_GET['Time1'])){
            $searchData['Time1'] = $_GET['Time1'];
            $activated_time = strtotime($_GET['Time1']);
            $query = $query->andWhere("Time >= '{$activated_time}'");
        }
        if(!empty($_GET['Time2'])){
            $searchData['Time2'] = $_GET['Time2'];
            $activated_time = strtotime($_GET['Time2']);
            $query = $query->andWhere("Time <= '{$activated_time}'");
        }
        $pages = new Pagination(['totalCount' =>$query->count(), 'pageSize' => 10]);
        $users = $query->offset($pages->offset)->limit($pages->limit)->all();
        $renderData = [
            'users' => $users,
            'searchData' => $searchData,
            'pageHtml' => LinkPager::widget([
                'pagination' => $pages,
                'options' => ['class' => 'pagination pagination-sm no-margin pull-right']
            ])
        ];
        echo '<pre>';
        print_r(\Yii::t('app', 'test'));
        exit;
        return $this->display('index', $renderData);
    }

}
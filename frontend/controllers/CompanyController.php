<?php
namespace frontend\controllers;

use Yii;
use common\models\Company;
use yii\data\ActiveDataProvider;

class CompanyController extends MainController
{
    private $company;
    
    public function actions()
    {
        return [
            'index' => ['class' => 'frontend\controllers\company\IndexAction'],
            'info' => ['class' => 'frontend\controllers\company\InfoAction'],
            'costBenefitCalculation' => ['class' => 'frontend\controllers\company\CostBenefitCalculationAction'],
            'remarks' => ['class' => 'frontend\controllers\company\RemarksAction'],
        ];
    }
    
    public function init()
    {
        parent::init();
        $this->company = parent::getCompany();
    }
    
	public function actionIndex()
	{
		$company = $this->company;
	
		return $this->render('view', ['company'=>$company]);
	}
	
	protected function getCompany(){
	    if($this->company)
	    {
	       return $this->company;
	    }
	}
}

?>
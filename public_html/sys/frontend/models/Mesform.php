<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\validators\UrlValidator;

class MesForm extends Model
{
	public $namemes;
	public $mailmes;
    public $textmes;
    public $bot;
    
	public function rules()
	{
		return [
		    [['mailmes', 'textmes', 'namemes'], 'required', 'message' => 'Обязательно для заполнения'],
		    ['mailmes', 'email', 'message' => 'Почта не коректна'],
			[['mailmes', 'textmes', 'namemes'], 'safe'],
			['bot', 'validateBot'],
		];
	}
	
	public function validateBot($attribute, $params, $validator)
	{
		if (!empty($this->$attribute)) {
			$this->addError($attribute, 'Ебанные Боты');
		}
	}
}
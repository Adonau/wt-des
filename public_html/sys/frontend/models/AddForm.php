<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\validators\UrlValidator;

class AddForm extends Model
{
	public $name;
	public $mail;
	public $date;
	public $rate;
	public $chronicle;
	public $url;
	public $bonus;
	public $dop;
	public $rvr;
	public $gve;
	public $mult;
	public $obt;
	public $lang;
	public $kraft;
	public $bot;
	public $textbonus;
	public $textdop;
	public $textobt;


	public function rules()
	{
		return [
			[['name', 'mail', 'date', 'rate', 'chronicle', 'url'], 'trim'],
			[['name', 'mail', 'date', 'rate', 'chronicle', 'url'], 'required', 'message' => 'Обязательно для заполнения'],
			['name', 'string', 'min' => '3', 'max' => '25', 'tooShort' => 'Не менее 3-х символов', 'tooLong' => 'Не более 25 символов'],
			['mail', 'email', 'message' => 'Введите коректный e-mail'],
			['url', 'url', 'message' => 'Введите корректный url'],
			[['textbonus', 'textdop', 'textobt', 'obt', 'dop', 'bonus', 'rvr', 'gve', 'mult', 'lang', 'kraft', 'bot'], 'safe'],
			['url', 'validateName'],
		];
	}
	
	public function validateName($attribute, $params, $validator)
	{
		$res = 'https://lineagers.top';
		$res2 = 'https://l2legends.top';
		$res3 = 'https://infinity-war.top';
		$res4 = 'https://multiproff.top';
		$res5 = 'https://l2shadow.top';
		$res6 = 'https://classic-euro.com';
		$res7 = 'https://linworld.top';
		$res8 = 'https://multi-classic.top';
		$res9 = 'https://l2white.com';
		$res10 = 'https://l2-empire.com';
		$res11 = 'http://l2mars.com';


		if (in_array($this->$attribute, [$res, '']) or in_array($this->$attribute, [$res . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res2, '']) or in_array($this->$attribute, [$res2 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res3, '']) or in_array($this->$attribute, [$res3 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res4, '']) or in_array($this->$attribute, [$res4 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res5, '']) or in_array($this->$attribute, [$res5 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res6, '']) or in_array($this->$attribute, [$res6 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res7, '']) or in_array($this->$attribute, [$res7 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res8, '']) or in_array($this->$attribute, [$res8 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res9, '']) or in_array($this->$attribute, [$res9 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res10, '']) or in_array($this->$attribute, [$res10 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}else if (in_array($this->$attribute, [$res11, '']) or in_array($this->$attribute, [$res11 . '/', ''])) {
			$this->addError($attribute, 'Данный ресурс забанен.');
		}
	}
}
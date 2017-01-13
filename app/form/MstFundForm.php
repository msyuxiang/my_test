<?php
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\Date;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;

use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Regex as RegexValidator;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Radio;

class MstFundForm extends BaseForm
{
	/**
	 * Forms initializer
	 *
	 * @param Users $user
	 * @param array $options
	 */
	public function initialize($model, $options){
		//ファンドID
		$fund_id = new Text('fund_id', array() );
		$fund_id->setLabel('ファンドID');
		$this->add($fund_id);
		
		//本匿名組合契約名称
		$fund_name = new Text('fund_name', array('maxlength' => 100, 'class' => 'form-control input-sm') );
		$fund_name->setLabel('本匿名組合契約名称名');
		$fund_name->addValidator(new PresenceOf(array('message' => 'ファンド名は必須です')));
		$fund_name->addValidator(new ValidateMstFundForm());
		$this->add($fund_name);
		
		//本匿名組合契約名称（カナ）
		$fund_name_kana = new Text('fund_name_kana', array('maxlength' => 100, 'class' => 'form-control input-sm') );
		$fund_name_kana->setLabel('本匿名組合契約名称名（カナ）');
		$fund_name_kana->addValidator(new PresenceOf(array('message' => 'ファンド名（カナ）は必須です')));
		$this->add($fund_name_kana);
	}
}
?>
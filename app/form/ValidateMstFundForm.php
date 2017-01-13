<?php
use Phalcon\Validation\Validator,
Phalcon\Validation\ValidatorInterface,
Phalcon\Validation\Message;

/**
 * MstFundFormのカスタムバリデーション
 * @author s.nakata
 *
 */
class ValidateMstFundForm extends Validator implements ValidatorInterface{
	public function validate(\Phalcon\Validation $validator, $attribute){
		//ファンドステータス
		$fund_status = $validator->getValue('fund_status');
		
		//出資金額が0以上のとき、購入フォーム型で「購入型」「寄付型」は選べない
		
		//※ファンド名の場合は、20文字以内（スペース含む。半角も1文字。利用可能記号は、 \ 「 」 ( ) - / . 
		//※セキュリテセット（ECに分離したためEC側でチェック）、booster,fanakitaの場合は、100文字以内（不可文字は、半角の ^ ` { | } ~ & < > " ' 
		//※環境依存文字はいずれも不可
		if($attribute == 'fund_name')
		{
			$fund_name = $validator->getValue('fund_name');
			
			//1文字ずつに分割
			$broken = preg_split("//u", $fund_name, -1, PREG_SPLIT_NO_EMPTY);
			
			//環境依存文字チェック
//			foreach ($broken as $char)
//			{
//				if(checkDependentChar($char))
//				{
//					$validator->appendMessage(new Message("ファンド名に環境依存文字が含まれています", $attribute, 'XXX'));
//					return false;
//				}
//			}
		}
		return true;
	}
}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FundController
 *
 * @author yo
 */
use \Phalcon\Mvc\Controller;

class FundController extends Controller {
	//put your code here
	
	protected function setMsSession($key , $value)
	{
		$this->session->set("ses_MSAT_ADMIN_#_".$key   ,  $value);
	}
	
	/**
	 * 汎用セッション保存（取得）
	 */
	protected function getMsSession($key)
	{
		return $this->session->get("ses_MSAT_ADMIN_#_".$key);
	}
	/**
	 * 汎用セッション保存（削除）
	 */
	protected function removeMsSession($key)
	{
		$this->session->remove("ses_MSAT_ADMIN_#_".$key);
	}
	//
		public function addAction()
	{
		//ログイン中で且つアクセス権限があるかをチェックする
		$mstFund = new MstFund();
		$mstFundForm = new MstFundForm($mstFund);
//		if($this->hasMsSession('mstFundForm_error'))
//		{
			$mstFundForm = $this->getMsSession('mstFundForm_error');
			$this->removeMsSession('mstFundForm_error');
			//$tab_display = '';
		//}
		$this->view->setVar('mstFundForm', $mstFundForm);
		//CSRFセット
//		$this->setCSRF();
	}
	
	/**
	 * ファンド新規入力チェック
	 */
	public function addConfirmAction()
	{
		//ログイン中で且つアクセス権限があるかをチェックする
		//パラメータ取得
		//$safe_params = getSafeParams();
		$safe_params = array();
		foreach ($_REQUEST as $key => $values){
			$safe_params[$key] = htmlspecialchars($values, ENT_QUOTES);
		}
		
		//ファンド名に半角「'」を許可するため、XSSをスキップ
		$safe_params["fund_name"] = $_REQUEST["fund_name"];
		$safe_params["fund_name"] = trim(trim($safe_params["fund_name"]),"　");
		//$safe_params["fund_name_kana"] = trim(trim($safe_params["fund_name_kana"]),"　");
		//$safe_params["fund_name_kana"] = mb_convert_kana(safe_params["fund_name_kana"], 's');
		//$safe_params["fund_name_kana"] = trim(safe_params["fund_name_kana"]);
		
		//フォームとバインド
$mstFund = new MstFund();
$mstFundForm = new MstFundForm();
$mstFundForm->bind($safe_params, $mstFund);
//		
//		//CSRFチェック
//		if($mstFundForm->isValid())
//		{
//			//入力内容をセッションに保存
//			$this->setMsSession('mstFundForm', $mstFundForm);
//			$this->setMsSession('safe_params', $safe_params);
//			//確認画面へ
//			return $this->response->redirect('/fund/addConfirm');
//		}
//		else
//		{
//			$error_label_list = array();
//			foreach ($mstFundForm->getMessages() as $message)
//			{
//				$field = $message->getField();
//				$label = $mstFundForm->get($field)->getLabel();
//				array_push($error_label_list, $label);
//			}
//				//エラーメッセージ
//				$this->flashSession->error('以下の入力内容に誤りがあります<br>'.implode('、', $error_label_list));
//			}
}
		//バリデーションエラー（入力画面へ戻る）
		public function addConfirmCheckAction(){
	
	}
}

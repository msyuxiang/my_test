{% block page_contents %}
<div class="portlet-body">
<form class="form-horizontal" action="addconfirm" method="POST" novalidate>
<div class="form-body">
	<table class="table table-bordered table-hover">
		<tr>
			<td style="width:14em;" class="bg">本匿名組合契約名称<span class='required'> * </span></td>
			<td colspan="3">
				<div class="col-md-12 input-group">
					<?php echo $mstFundForm->render('fund_name');?>
					<span class="help-block">
						※ファンド名の場合は、20文字以内（スペース含む。半角も1文字。利用可能記号は、 \ 「 」 ( ) - / .　ゝ<br>
						※セキュリテセット、booster,fanakitaの場合は、100文字以内（不可文字は、半角の ^ ` { | } ~ & < > " '<br>
						※環境依存文字はいずれも不可。
					</span>
				</div>
			</td>
		</tr>
		<tr>
			<td class="bg">本匿名組合契約名称（カナ）<span class='required'> * </span></td>
			<td colspan="3">
				<div class="col-md-12 input-group">
					<?php echo $mstFundForm->render('fund_name_kana');?>
				</div>
			</td>
		</tr>
	</table>
<div class="form-actions">
	<input type="submit" class="btn btn-primary blue" value="保存内容を確認する"/>
</div>
</form>
</div>
</div>
{% endblock %}

<div class="portlet-body form">
					
	<div class="note note-msatgreen">
		<h4 class="block">以下の内容でファンド情報を登録します。よろしければ「確認して保存」をクリックしてください。</h4>
	</div>

	<form class="form-horizontal" action="addconfirmcheck" method="POST">

		<table class="table table-bordered table-hover">
			<tr>
				<td style="width:200px;" class="bg">本匿名組合契約名称<span class='required'> * </span></td>
				<td colspan="3"><?php echo $safe_params['fund_name']?></td>
			</tr>
			<tr>
				<td class="bg">本匿名組合契約名称（カナ）<span class='required'> * </span></td>
				<td colspan="3"><?php echo $safe_params['fund_name_kana']?></td>
			</tr>
		</table>
	<div class="form-actions">
		<input type="submit" class="btn btn-primary blue" value="保存内容を確認する"/>
	</div>
	</form>
</div>

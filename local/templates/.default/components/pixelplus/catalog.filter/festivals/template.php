<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="filter_wrap" style="margin-bottom:40px;">
	<span class="filter_title">Выберите фестиваль</span>
	<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="/festivaly/index.php" method="get">
		<input type="hidden" name="festFilter_pf[START_DATE]" id="s-date" />
		<?/* foreach($arResult["ITEMS"] as $arItem):
			if(array_key_exists("HIDDEN", $arItem)):
				echo $arItem["INPUT"];
			endif;
		endforeach;*/?>
	
		<? foreach($arResult["PROPS"] as $key => $arItem):?>
			<? if($arItem["CODE"]=="MONTH"):?>
				<div class="select_wrap">
					<select name="<?=$arItem['NAME']?>" class="select">
					    <option value="" <? if(!$_REQUEST[$arParams['FILTER_NAME'].'_pf'][$arItem['CODE']]):?>selected="selected"<?endif?>><?=$arItem['TITLE']?></option>
					
						<? 
						$month=1;
						foreach($arItem['VALUES'] as $id => $value):?>
								<option <? if($_REQUEST[$arParams['FILTER_NAME'].'_pf'][$arItem['CODE']] == $month):?>selected="selected"<? endif;?> value="<?=$month?>"><?=$value?></option>
						<? $month++;
						endforeach;?>
					</select>
				</div>
		<? else:?>
			<div class="select_wrap">
					<select name="<?=$arItem['NAME']?>" class="select">
					    <option value="" <? if(!$_REQUEST[$arParams['FILTER_NAME'].'_pf'][$arItem['CODE']]):?>selected="selected"<?endif?>><?=$arItem['TITLE']?></option>
							<? foreach($arItem['VALUES'] as $id => $value):?>
								<option <? if($_REQUEST[$arParams['FILTER_NAME'].'_pf'][$arItem['CODE']] == $id):?>selected="selected"<? endif;?> value="<?=$id?>"><?=$value?></option>
						<?endforeach;?>
					</select>
				</div>
				
		<? endif;?>
		<? endforeach;?>
		<input type="hidden" name="set_filter" value="Y" /> 
		<input type="submit" class="filter_search" value=""/>
	</form>
</div>

<? /*
<script>
$(document).ready(function(e) {
	$('select[name="festFilter_pf[MONTH]"]').on("change", function(event){
		var val = $(this).val();
		if(val.length < 2) val = "0" + val;

		if(val == 0) val = "01";
		
		val = "01-" + val + "-<?=date("Y")?>";
		//alert(val);
		
		$('#s-date').val(val);
	});
	
	var tmp = navigator.userAgent.toLowerCase();
	if(tmp.indexOf('firefox') != -1){
		$('.select').css({'padding-top':'6px'});
	}

	if(tmp.indexOf('firefox') != -1){

		$('.select').css({'padding-top':'6px'});
	}
});  
</script>
*/?>




<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����������");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.element", "country_gallery_2016", Array(
	"IBLOCK_TYPE" => "content",	// ��� ���������
		"IBLOCK_ID" => "7",	// ��������
		"ELEMENT_ID" => $_REQUEST["ID"],	// ID ��������
		"ELEMENT_CODE" => "",	// ��� ��������
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID �������
		"SECTION_CODE" => "",	// ��� �������
		"PROPERTY_CODE" => array(	// ��������
			0 => "",
			1 => "PHOTO",
			2 => "",
		),
		"OFFERS_LIMIT" => "0",	// ������������ ���������� ����������� ��� ������ (0 - ���)
		"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
		"DETAIL_URL" => "",	// URL, ������� �� �������� � ���������� �������� �������
		"BASKET_URL" => "/personal/basket.php",	// URL, ������� �� �������� � �������� ����������
		"ACTION_VARIABLE" => "action",	// �������� ����������, � ������� ���������� ��������
		"PRODUCT_ID_VARIABLE" => "id",	// �������� ����������, � ������� ���������� ��� ������ ��� �������
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// �������� ����������, � ������� ���������� ���������� ������
		"PRODUCT_PROPS_VARIABLE" => "prop",	// �������� ����������, � ������� ���������� �������������� ������
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// �������� ����������, � ������� ���������� ��� ������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
		"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
		"BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
		"SET_TITLE" => "N",	// ������������� ��������� ��������
		"SET_STATUS_404" => "N",	// ������������� ������ 404
		"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
		"USE_ELEMENT_COUNTER" => "Y",	// ������������ ������� ����������
		"PRICE_CODE" => "",	// ��� ����
		"USE_PRICE_COUNT" => "N",	// ������������ ����� ��� � �����������
		"SHOW_PRICE_COUNT" => "1",	// �������� ���� ��� ����������
		"PRICE_VAT_INCLUDE" => "Y",	// �������� ��� � ����
		"PRICE_VAT_SHOW_VALUE" => "N",	// ���������� �������� ���
		"PRODUCT_PROPERTIES" => "",	// �������������� ������
		"USE_PRODUCT_QUANTITY" => "N",	// ��������� �������� ���������� ������
		"LINK_IBLOCK_TYPE" => "",	// ��� ���������, �������� �������� ������� � ������� ���������
		"LINK_IBLOCK_ID" => "",	// ID ���������, �������� �������� ������� � ������� ���������
		"LINK_PROPERTY_SID" => "",	// ��������, � ������� �������� �����
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL �� ��������, ��� ����� ������� ������ ��������� ���������
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
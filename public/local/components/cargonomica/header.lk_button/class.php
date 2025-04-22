<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @see https://jira.cargonomica.com/browse/BD-805
 */
class HeaderLkButton extends CBitrixComponent
{
    /**
     * @param $arParams
     * @return array
     * @throws Exception
     */
    public function onPrepareComponentParams($arParams): array
    {
        $arParams['IBLOCK_ID'] = (int)$arParams['IBLOCK_ID'];
        if (!$arParams['IBLOCK_ID']) {
            throw new Exception('IBLOCK_ID is empty');
        }

        if (!$arParams['ELEMENT_CODE']) {
            throw new Exception('ELEMENT_CODE is empty');
        }

        return $arParams;
    }

    /**
     * @return void
     * @throws Exception
     */
    public function executeComponent(): void
    {
        if ($this->startResultCache()) {
            $this->getData();
            $this->includeComponentTemplate();
        }
    }

    /**
     * @return void
     * @throws Exception
     */
    protected function getData(): void
    {
        $element = CIBlockElement::GetList(
            [],
            [
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                'CODE' => $this->arParams['ELEMENT_CODE'],
            ],
            false,
            ['nTopCount' => 1],
            [
                'ID',
                'IBLOCK_ID',
                'PROPERTY_BUTTON_LK_TEXT',
                'PROPERTY_BUTTON_LK_LINK',
            ],
        )->Fetch();

        if (!$element) {
            throw new Exception('Element not found');
        }

        $this->arResult['lkButton'] = [
            'text' => $element['PROPERTY_BUTTON_LK_TEXT_VALUE'],
            'link' => $element['PROPERTY_BUTTON_LK_LINK_VALUE'],
        ];
    }
}

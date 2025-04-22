
<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die;
}

/**
 * @var array $arResult
 */

if (!$arResult['lkButton']['text']) {
    return;
}

?>
<div class="header__user">
    <button class="header__burger"><span class="helper-burger"></span></button>
    <?php if ($arResult['lkButton']['link']) { ?>
        <a href="<?= $arResult['lkButton']['link'] ?>" class="btn _js-login" target="_blank"><?= $arResult['lkButton']['text']; ?></a>
    <?php } else { ?>
        <span class="btn _js-login"><?= $arResult['lkButton']['text']; ?></span>
    <?php } ?>
</div>

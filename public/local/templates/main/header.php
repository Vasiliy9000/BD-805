<?php

use Bitrix\Main\Application;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
global $APPLICATION;
$context = \Bitrix\Main\Context::getCurrent();
?>

<!DOCTYPE html>
<html class="no-js" lang="<?= $context->getLanguage() ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/style.min.css">
    <meta name="description" content="<?php $APPLICATION->ShowProperty('description'); ?>">
    <meta property="keywords" content="<?php $APPLICATION->ShowProperty('keywords'); ?>">
    <meta property="og:site_name" content="">
    <meta property="og:keywords" content="<?php $APPLICATION->ShowProperty('keywords'); ?>">
    <meta property="og:url"
          content="<?= (Application::getInstance()->getContext()->getRequest()->isHttps() ? "https://" : "http://")
          . $_SERVER['SERVER_NAME']
          . $APPLICATION->GetCurPage(); ?>"
    />
    <meta property="og:title" content="<?php $APPLICATION->ShowTitle() ?>"
    >
    <meta property="twitter:card" content="summary_large_image">
    <meta name="pinterest" content="nopin">
</head>

<body class="body-on-load ">
<header class="header">
    <div class="header__inner">
        <div class="header__body">
            <div class="header__top">
                <div class="header__logo _desktop">
                    <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo.svg" alt=""></a></div>
                <div class="header__logo _mobile"><a href="/">
                        <svg width="32" height="32" fill="none" viewBox="0 0 32 32">
                            <path fill="#20212B"
                                  d="M9.951 6.708H2.666V2.666H16l-2.62 2.62c-1.115 1.115-1.852 1.42-3.429 1.42Zm1.454 4.236 8.277-8.277h-1.396L14.521 6.43c-1.433 1.433-2.543 1.893-4.57 1.893H2.666v4.04l5.31.001c1.577 0 2.314-.305 3.428-1.42ZM7.457 22.257l19.59-19.59h-1.396L10.574 17.743c-1.433 1.434-2.544 1.894-4.57 1.894H2.666v4.04h1.362c1.577 0 2.314-.305 3.428-1.42ZM8.6 23.4c-1.433 1.433-2.544 1.893-4.57 1.893H2.665v4.04h26.667V2.667L8.6 23.4Zm.831-6.8L23.365 2.668h-1.397l-9.42 9.42c-1.433 1.433-2.543 1.893-4.57 1.893H2.666v4.04h3.336c1.577 0 2.314-.304 3.428-1.42Z"
                            />
                        </svg>
                    </a></div>
                <nav class="header__nav">
                    <ul>
                        <li class="header__nav-item-sub">
                            <div class="header__nav-label">Грузоперевозчикам
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     fill="none"
                                     viewBox="0 0 16 16"
                                >
                                    <path stroke="#20212B"
                                          stroke-width="1.06667"
                                          d="m5.172 7.333 2.78 2.782a.067.067 0 0 0 .095 0l2.781-2.782"
                                    />
                                </svg>
                            </div>
                            <div class="header__nav-sub">
                                <div class="header__nav-sub-item">
                                    <div class="header__nav-sub-item-header">
                                        <a href="#" class="header__nav-sub-item-header-name">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/header-pricep.svg" alt="">
                                            полуприцеп.рф
                                        </a>
                                        <div class="header__nav-sub-item-header-label">полуприцепы с выгодой</div>
                                    </div>
                                    <ul>
                                        <li><a href="#">Аренда с выкупом тягачей</a></li>
                                        <li><a href="#">Шины в рассрочку</a></li>
                                        <li><a href="#">Сопутствующие товары</a></li>
                                        <li><a href="#">Трейд-ИН</a></li>
                                    </ul>
                                </div>
                                <div class="header__nav-sub-item">
                                    <div class="header__nav-sub-item-header">
                                        <a href="#" class="header__nav-sub-item-header-name">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/header-used.svg" alt="">
                                            Cargo.Used
                                        </a>
                                        <div class="header__nav-sub-item-header-label">полуприцепы с выгодой</div>
                                    </div>
                                    <ul>
                                        <li><a href="#">Аренда с выкупом тягачей</a></li>
                                        <li><a href="#">Шины в рассрочку</a></li>
                                        <li><a href="#">Сопутствующие товары</a></li>
                                        <li><a href="#">Трейд-ИН</a></li>
                                    </ul>
                                </div>
                                <div class="header__nav-sub-item">
                                    <div class="header__nav-sub-item-header">
                                        <a href="fuel.php" class="header__nav-sub-item-header-name">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/header-fuel.svg" alt="">
                                            Cargo.Fuel
                                        </a>
                                        <div class="header__nav-sub-item-header-label">скидка на топливо</div>
                                    </div>
                                    <ul>
                                        <li><a href="fuel-adblue.php">Adblue</a></li>
                                        <li><a href="#">Пропан</a></li>
                                        <li><a href="#">Метан</a></li>
                                        <li><a href="fuel-services.php">Сервисы</a></li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header__nav-item-sub">
                            <div class="header__nav-label">Партнерам
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     fill="none"
                                     viewBox="0 0 16 16"
                                >
                                    <path stroke="#20212B"
                                          stroke-width="1.06667"
                                          d="m5.172 7.333 2.78 2.782a.067.067 0 0 0 .095 0l2.781-2.782"
                                    />
                                </svg>
                            </div>
                            <div class="header__nav-sub">
                                <div class="header__nav-sub-item">
                                    <div class="header__nav-sub-item-header">
                                        <a href="#" class="header__nav-sub-item-header-name">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/header-pricep.svg" alt="">
                                            полуприцеп.рф
                                        </a>
                                        <div class="header__nav-sub-item-header-label">полуприцепы с выгодой</div>
                                    </div>
                                    <ul>
                                        <li><a href="#">Аренда с выкупом тягачей</a></li>
                                        <li><a href="#">Шины в рассрочку</a></li>
                                        <li><a href="#">Сопутствующие товары</a></li>
                                        <li><a href="#">Трейд-ИН</a></li>
                                    </ul>
                                </div>
                                <div class="header__nav-sub-item">
                                    <div class="header__nav-sub-item-header">
                                        <a href="#" class="header__nav-sub-item-header-name">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/header-used.svg" alt="">
                                            Cargo.Used
                                        </a>
                                        <div class="header__nav-sub-item-header-label">полуприцепы с выгодой</div>
                                    </div>
                                    <ul>
                                        <li><a href="#">Аренда с выкупом тягачей</a></li>
                                        <li><a href="#">Шины в рассрочку</a></li>
                                        <li><a href="#">Сопутствующие товары</a></li>
                                        <li><a href="#">Трейд-ИН</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header__nav-item-sub">
                            <div class="header__nav-label">Сотрудникам
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     fill="none"
                                     viewBox="0 0 16 16"
                                >
                                    <path stroke="#20212B"
                                          stroke-width="1.06667"
                                          d="m5.172 7.333 2.78 2.782a.067.067 0 0 0 .095 0l2.781-2.782"
                                    />
                                </svg>
                            </div>
                            <div class="header__nav-sub">
                                <div class="header__nav-sub-item">
                                    <div class="header__nav-sub-item-header">
                                        <a href="#" class="header__nav-sub-item-header-name">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/header-pricep.svg" alt="">
                                            полуприцеп.рф
                                        </a>
                                        <div class="header__nav-sub-item-header-label">полуприцепы с выгодой</div>
                                    </div>
                                    <ul>
                                        <li><a href="#">Аренда с выкупом тягачей</a></li>
                                        <li><a href="#">Шины в рассрочку</a></li>
                                        <li><a href="#">Сопутствующие товары</a></li>
                                        <li><a href="#">Трейд-ИН</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Инвесторам</a></li>
                        <li class="header__nav-item-much"><a href="about.php">О&nbsp;компании</a></li>

                        <li class="header__nav-item-much"><a href="contacts.php">Контакты</a></li>

                        <li class="header__nav-item-sub header__nav-item-more">
                            <div class="header__nav-label">Еще
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     fill="none"
                                     viewBox="0 0 16 16"
                                >
                                    <path stroke="#20212B"
                                          stroke-width="1.06667"
                                          d="m5.172 7.333 2.78 2.782a.067.067 0 0 0 .095 0l2.781-2.782"
                                    />
                                </svg>
                            </div>
                            <div class="header__nav-sub">
                                <div class="header__nav-sub-item _simple">
                                    <div class="header__nav-sub-item-header">
                                        <a href="about.php" class="header__nav-sub-item-header-name">
                                            О компании
                                        </a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Подход</a></li>
                                        <li><a href="#">История</a></li>
                                        <li><a href="#">Структура</a></li>
                                    </ul>
                                </div>
                                <div class="header__nav-sub-item _simple">
                                    <div class="header__nav-sub-item-header">
                                        <a href="contacts.php" class="header__nav-sub-item-header-name">
                                            Контакты
                                        </a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Сервисы</a></li>
                                        <li><a href="#">Отделы</a></li>
                                        <li><a href="#">Техподдержка</a></li>
                                        <li><a href="#">PR</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                
                <?php $APPLICATION->IncludeComponent(
                    "cargonomica:header.lk_button",
                    "",
                    [
                        'IBLOCK_ID' => CARGONOMICA_SITE_TEMPLATE_SETTINGS_IB_ID,
                        'ELEMENT_CODE' => 'CARGONOMICA_MAIN',
                        'CACHE_TYPE' => 'A',
                        'CACHE_TIME' => 3600 * 24 * 365,
                    ],
                ); ?>

            </div>
        </div>
    </div>
</header>

<div class="main-wrapper">

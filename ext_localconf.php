<?php

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['initFEuser'][] = \DevElement\DevelementCookies\Service\CookieService::class . '->set';

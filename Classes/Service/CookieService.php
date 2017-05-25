<?php
namespace DevElement\DevelementCookies\Service;

use \DevElement\DevelementCookies\Utility\ConfigurationUtility;
use \TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Service: Cookie
 *
 * @package DevElement\DevelementCookies\Service
 */
class CookieService
{
    /**
     * Sets cookies based on configuration
     *
     * @return void
     */
    public function set()
    {
        if (ConfigurationUtility::isValid()) {
            $cookieSettings = ConfigurationUtility::getCookieSettings();
            foreach ($cookieSettings as $getParam => $cookieSetting) {
                if (GeneralUtility::_GET($getParam) !== null) {
                    $value = GeneralUtility::_GET($getParam);
                    if (isset($cookieSetting['filter'])) {
                        $value = filter_var($value, $cookieSetting['filter']);
                    }
                    setcookie(
                        $getParam,
                        $value,
                        (isset($cookieSetting['setCookieOptions']['expire'])) ? $cookieSetting['setCookieOptions']['expire'] : 0,
                        (isset($cookieSetting['setCookieOptions']['path'])) ? $cookieSetting['setCookieOptions']['path'] : '',
                        (isset($cookieSetting['setCookieOptions']['domain'])) ? $cookieSetting['setCookieOptions']['domain'] : '',
                        (isset($cookieSetting['setCookieOptions']['secure'])) ? $cookieSetting['setCookieOptions']['secure'] : false,
                        (isset($cookieSetting['setCookieOptions']['httpOnly'])) ? $cookieSetting['setCookieOptions']['httpOnly'] : false
                    );
                }
            }
        }
    }
}

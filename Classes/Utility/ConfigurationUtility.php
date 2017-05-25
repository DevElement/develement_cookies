<?php
namespace DevElement\DevelementCookies\Utility;

/**
 * Utility: Cookie configuration
 *
 * @package DevElement\DevelementCookies\Utility
 */
class ConfigurationUtility
{
    /**
     * @return boolean
     */
    public static function isValid()
    {
        $settings = static::getConfiguration();
        return (is_array($settings) && !empty($settings['getParamsToCookies']));
    }
    /**
     * @return array
     */
    public static function getCookieSettings()
    {
        $configuration = static::getConfiguration();
        return (isset($configuration['getParamsToCookies']) ? $configuration['getParamsToCookies'] : $configuration['getParamsToCookies.']);
    }

    /**
     * @return array
     */
    public static function getConfiguration()
    {
        static $configuration;
        if ($configuration === null) {
            $data = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['develement_cookies'];
            if (!is_array($data)) {
                $configuration = (array) unserialize($data);
            } else {
                $configuration = $data;
            }
        }
        return $configuration;
    }
}

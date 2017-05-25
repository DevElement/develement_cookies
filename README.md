# develement_cookies
Saves GET params to cookies in TYPO3

## Example usage
``
$GLOBALS['TYPO3_CONF_VARS']['extConf']['develement_cookies'] = [
    'getParamsToCookies' => [
        'gclid' => [
            'setCookieOptions' => [
                'expire' => 0,
                'path' => '',
                'domain' => '',
                'secure' => false,
                'httpOnly' => false
            ],
            'filter' => FILTER_SANITIZE_STRING
        ],
        'utm_source' => [
            'setCookieOptions' => [
                'expire' => 0,
                'path' => '',
                'domain' => '',
                'secure' => false,
                'httpOnly' => false
            ],
            'filter' => FILTER_SANITIZE_STRING
        ],
        'utm_medium' => [
            'setCookieOptions' => [
                'expire' => 0,
                'path' => '',
                'domain' => '',
                'secure' => false,
                'httpOnly' => false
            ],
            'filter' => FILTER_SANITIZE_STRING
        ],
        'utm_campaign' => [
            'setCookieOptions' => [
                'expire' => 0,
                'path' => '',
                'domain' => '',
                'secure' => false,
                'httpOnly' => false
            ],
            'filter' => FILTER_SANITIZE_STRING
        ]
    ]
]
``

## Installation
Add the following to the ``repositories`` block in your composer.json:
```
{
  "type": "vcs",
  "url": "https://github.com/DevElement/develement_cookies.git"
}
```    

And run ``composer require develement/develement-cookies dev-master``.

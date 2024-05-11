<?php
namespace app;

final class Bootstrap extends \kyubi\base\Bootstrap
{

    /**
     *
     * {@inheritdoc}
     * @see \kyubi\base\Bootstrap::init()
     */
    public function init($app)
    {
        if (\Str::endsWith(request()->hostInfo, ['studio','0.0.0.0'])) {
            define('STUDIO_BASEURL', '');
            define('DEFAULT_AUTH', 'studio');
            // defined('APP_OBFUSCATE_JS') or define('APP_OBFUSCATE_JS', true);
        } else {
            define('STUDIO_DISABLED', true);
        }
    }

    /**
     *
     * {@inheritdoc}
     * @see \kyubi\base\Bootstrap::bootWeb()
     */
    protected function bootWeb($app)
    {}
}
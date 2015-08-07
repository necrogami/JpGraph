<?php
namespace JpGraph;

/**
 * GlobalConfig
 *
 * Gonfigs in JpGraph are just global constants. This class makes it simpler to update config values in a composer
 * environment.
 *
 * @author warmans
 */
class GlobalConfig
{
    private static $config = array(
        'CSIMCACHE_DIR' => 'csimcache/',
        'CSIMCACHE_HTTP_DIR' => 'csimcache/',
        'DEFAULT_ERR_LOCALE' => 'en',
        'DEFAULT_GFORMAT' => 'auto',
        'USE_CACHE' => false,
        'READ_CACHE' => true,
        'USE_IMAGE_ERROR_HANDLER' => true,
        'CATCH_PHPERRMSG' => true,
        'INSTALL_PHP_ERR_HANDLER' => false,
        'ERR_DEPRECATED' => true,
        'USE_LIBRARY_IMAGETTFBBOX' => true,
        'CACHE_FILE_GROUP' => 'www',
        'CACHE_FILE_MOD'=>0664,
        'DEFAULT_THEME_CLASS'=>'UniversalTheme',
        'SUPERSAMPLING'=>true,
        'SUPERSAMPLING_SCALE'=>1
    );

    public static function set($key, $val)
    {
        self::$config[$key] = $val;
    }

    public static function get($key)
    {
        return self::$config[$key];
    }
}

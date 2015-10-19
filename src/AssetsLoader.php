<?php

/**
 * AssetsLoader.php
 *
 * @copyright    More in license.md
 * @license      http://www.michalseidler.com
 * @author       Michal Seidler http://www.michalseidler.com
 * @package      saja:nette-project:assets-loader
 * @subpackage   DI
 * @since        5.0
 *
 * @date         14.10.14
 */
namespace Saja\AssetsLoader;

class AssetsLoader
{
    private static $instance;

    /** @return AssetsLoader */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function renderCss(){
        return '';
    }

    public function renderJs(){
        return '';
    }

    protected function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
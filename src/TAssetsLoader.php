<?php
/**
 * TAssetsLoader.php
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
use Nette;
use Nette\Application;

trait TAssetsLoader
{
    /**
     * @var AssetsLoader
     */
    protected $assetsLoader;

    public function injectAssetsLoader() {
        $this->assetsLoader = AssetsLoader::getInstance();
    }
}
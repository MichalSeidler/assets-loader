<?php
/**
 * AssetsLoaderExtension.php
 *
 * @copyright	More in license.md
 * @license		http://www.michalseidler.com
 * @author		Michal Seidler http://www.michalseidler.com
 * @package		Saja:nette-project:assets-loader
 * @subpackage	DI
 * @since		5.0
 *
 * @date		14.10.14
 */

namespace Saja\AssetsLoader\DI;

use Nette\DI\CompilerExtension;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;

class AssetsLoaderExtension extends CompilerExtension
{
    public function loadConfiguration()
    {
        $builder = $this->getContainerBuilder();
        $builder->addDefinition('service.routerFactory')
            ->setClass('Modules\RouterFactory') // YOUR ROUTER FACTORY CLASS
            ->addTag(Flame\Modules\ModulesExtension::TAG_ROUTER); // DONT FORGET TO ADD THE TAG!
    }
}
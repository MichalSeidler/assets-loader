<?php
/**
 * AssetsLoaderExtension.php
 *
 * @copyright	More in license.md
 * @license		http://www.michalseidler.com
 * @author		Michal Seidler http://www.michalseidler.com
 * @package		saja:nette-project:assets-loader
 * @subpackage	DI
 * @since		5.0
 *
 * @date		14.10.14
 */

namespace Saja\AssetsLoader\DI;

use Nette\DI\CompilerExtension;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;

use Flame\Modules\Providers\IRouterProvider;
use Flame\Modules\Application\Routers\NetteRouteMock;
use Flame\Modules\Providers\ILatteMacrosProvider;


class AssetsLoaderExtension extends CompilerExtension implements IRouterProvider, ILatteMacrosProvider
{
    public function getRoutesDefinition()
    {
        $routeList = new RouteList;
        $routeList[] = new NetteRouteMock('index.php', 'App:Homepage:default', Route::ONE_WAY);
        $routeList[] = new Route('<module>/<presenter>/<action>[/<id>]', array(
            'module' => 'App',
            'Presenter' => 'Homepage',
            'action' => 'default',
            'id' => null
        ));

        return $routeList;
    }

    public function getLatteMacros()
    {
        return array(
            'Saja\AssetsLoader\Latte\Macros\AssetMacros'
        );
    }
}
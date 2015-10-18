<?php
/**
 * Router factory.
 */
namespace Saja\AssetsLoader\App;

use Nette;
class RouterFactory
{
    /**
     * @return \Nette\Application\IRouter
     */
    public function createRouter()
    {
        $router = new Nette\Application\Routers\RouteList();
        $router[] = new Nette\Application\Routers\Route('<preseasdanter>/<acasdadtion>[/<id>]', 'Homepage:default');
        return $router;
    }
}
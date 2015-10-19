<?
namespace Saja\AssetsLoader\Latte\Macros;

use Latte\Macros\MacroSet;
use Latte\MacroNode;
use Latte\PhpWriter;
use Latte\Compiler;

use Saja\AssetsLoader\AssetsLoader;

class AssetMacros extends MacroSet
{
    public static function install(Compiler $compiler)
    {
        $me = new static($compiler);
        $me->addMacro('asset', array($me, 'macroAsset'));
    }

    public function macroAsset(MacroNode $node, PhpWriter $writer){
        switch($node->args){
            case 'css':
                return AssetsLoader::getInstance()->renderCss();
            case 'js':
                return AssetsLoader::getInstance()->renderJs();
        }
        return null;
    }
}
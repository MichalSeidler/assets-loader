<?
namespace Saja\AssetsLoader\Latte\Macros;

use Latte\Macros\MacroSet;
use Latte\Compiler;

class AssetMacros extends MacroSet
{
    const OUTPUT = 'do-everything-with-that';

    public static function install(Compiler $compiler)
    {
        $me = new static($compiler);
        $me->addMacro('css', "echo '" . self::OUTPUT . "'");
    }
}
<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptMaya - Representation of the Mayan hieroglyphs script.
 * @psalm-immutable
 */
class ScriptMaya extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Maya';
    }

    public function number(): string
    {
        return '090';
    }
}

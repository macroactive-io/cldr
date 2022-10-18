<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Mayan hieroglyphs
 *
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

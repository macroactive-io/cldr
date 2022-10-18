<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Miao (Pollard)
 *
 * @psalm-immutable
 */
class ScriptPlrd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Plrd';
    }

    public function number(): string
    {
        return '282';
    }

    public function unicodeName(): string
    {
        return 'Miao';
    }
}

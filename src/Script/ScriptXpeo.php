<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptXpeo - Representation of the Old Persian script.
 * @psalm-immutable
 */
class ScriptXpeo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Xpeo';
    }

    public function number(): string
    {
        return '030';
    }

    public function unicodeName(): string
    {
        return 'Old_Persian';
    }
}

<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Old Persian
 *
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

<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Cyrillic
 *
 * @psalm-immutable
 */
class ScriptCyrl extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cyrl';
    }

    public function number(): string
    {
        return '220';
    }

    public function unicodeName(): string
    {
        return 'Cyrillic';
    }
}

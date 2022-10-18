<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Grantha
 *
 * @psalm-immutable
 */
class ScriptGran extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Gran';
    }

    public function number(): string
    {
        return '343';
    }

    public function unicodeName(): string
    {
        return 'Grantha';
    }
}

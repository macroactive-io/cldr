<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Hatran
 *
 * @psalm-immutable
 */
class ScriptHatr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hatr';
    }

    public function number(): string
    {
        return '127';
    }

    public function unicodeName(): string
    {
        return 'Hatran';
    }
}

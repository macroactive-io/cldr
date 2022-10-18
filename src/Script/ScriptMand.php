<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Mandaic, Mandaean
 *
 * @psalm-immutable
 */
class ScriptMand extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mand';
    }

    public function number(): string
    {
        return '140';
    }

    public function unicodeName(): string
    {
        return 'Mandaic';
    }
}

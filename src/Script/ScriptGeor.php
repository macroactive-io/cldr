<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptGeor - Representation of the Georgian script.
 * @psalm-immutable
 */
class ScriptGeor extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Geor';
    }

    public function number(): string
    {
        return '240';
    }

    public function unicodeName(): string
    {
        return 'Georgian';
    }
}

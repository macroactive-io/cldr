<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Latin
 *
 * @psalm-immutable
 */
class ScriptLatn extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Latn';
    }

    public function number(): string
    {
        return '215';
    }

    public function unicodeName(): string
    {
        return 'Latin';
    }
}

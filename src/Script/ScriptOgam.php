<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptOgam - Representation of the Ogham script.
 * @psalm-immutable
 */
class ScriptOgam extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ogam';
    }

    public function number(): string
    {
        return '212';
    }

    public function unicodeName(): string
    {
        return 'Ogham';
    }
}

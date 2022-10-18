<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Ogham
 *
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

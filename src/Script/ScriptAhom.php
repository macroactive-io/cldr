<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Ahom
 *
 * @psalm-immutable
 */
class ScriptAhom extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ahom';
    }

    public function number(): string
    {
        return '338';
    }

    public function unicodeName(): string
    {
        return 'Ahom';
    }
}

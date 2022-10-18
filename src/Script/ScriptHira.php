<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptHira - Representation of the Hiragana script.
 * @psalm-immutable
 */
class ScriptHira extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hira';
    }

    public function number(): string
    {
        return '410';
    }

    public function unicodeName(): string
    {
        return 'Hiragana';
    }
}

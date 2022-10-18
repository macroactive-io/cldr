<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Adlam
 *
 * @psalm-immutable
 */
class ScriptAdlm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Adlm';
    }

    public function number(): string
    {
        return '166';
    }

    public function unicodeName(): string
    {
        return 'Adlam';
    }
}

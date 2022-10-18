<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Palmyrene
 *
 * @psalm-immutable
 */
class ScriptPalm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Palm';
    }

    public function number(): string
    {
        return '126';
    }

    public function unicodeName(): string
    {
        return 'Palmyrene';
    }
}

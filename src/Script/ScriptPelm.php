<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptPelm - Representation of the Proto-Elamite script.
 * @psalm-immutable
 */
class ScriptPelm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Pelm';
    }

    public function number(): string
    {
        return '016';
    }
}

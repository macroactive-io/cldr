<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Tirhuta
 *
 * @psalm-immutable
 */
class ScriptTirh extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tirh';
    }

    public function number(): string
    {
        return '326';
    }

    public function unicodeName(): string
    {
        return 'Tirhuta';
    }
}

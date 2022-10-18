<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Mahajani
 *
 * @psalm-immutable
 */
class ScriptMahj extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mahj';
    }

    public function number(): string
    {
        return '314';
    }

    public function unicodeName(): string
    {
        return 'Mahajani';
    }
}

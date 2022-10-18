<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Syriac
 *
 * @psalm-immutable
 */
class ScriptSyrc extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Syrc';
    }

    public function number(): string
    {
        return '135';
    }

    public function unicodeName(): string
    {
        return 'Syriac';
    }
}

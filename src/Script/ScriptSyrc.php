<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrc - Representation of the Syriac script.
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

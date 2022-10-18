<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptThai - Representation of the Thai script.
 * @psalm-immutable
 */
class ScriptThai extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Thai';
    }

    public function numerals(): array
    {
        return ['๐', '๑', '๒', '๓', '๔', '๕', '๖', '๗', '๘', '๙'];
    }

    public function number(): string
    {
        return '352';
    }

    public function unicodeName(): string
    {
        return 'Thai';
    }
}

<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptLaoo - Representation of the Lao script.
 * @psalm-immutable
 */
class ScriptLaoo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Laoo';
    }

    public function numerals(): array
    {
        return ['໐', '໑', '໒', '໓', '໔', '໕', '໖', '໗', '໘', '໙'];
    }

    public function number(): string
    {
        return '356';
    }

    public function unicodeName(): string
    {
        return 'Lao';
    }
}

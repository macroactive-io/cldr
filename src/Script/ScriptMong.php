<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Mongolian
 *
 * @psalm-immutable
 */
class ScriptMong extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mong';
    }

    public function numerals(): array
    {
        return ['᠐', '᠑', '᠒', '᠓', '᠔', '᠕', '᠖', '᠗', '᠘', '᠙'];
    }

    public function number(): string
    {
        return '145';
    }

    public function unicodeName(): string
    {
        return 'Mongolian';
    }
}

<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Tibetan
 *
 * @psalm-immutable
 */
class ScriptTibt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tibt';
    }

    public function numerals(): array
    {
        return ['༠', '༡', '༢', '༣', '༤', '༥', '༦', '༧', '༨', '༩'];
    }

    public function number(): string
    {
        return '330';
    }

    public function unicodeName(): string
    {
        return 'Tibetan';
    }
}

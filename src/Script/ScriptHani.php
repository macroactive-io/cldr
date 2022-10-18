<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Han (Hanzi, Kanji, Hanja)
 *
 * @psalm-immutable
 */
class ScriptHani extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hani';
    }

    public function numerals(): array
    {
        return ['〇', '一', '二', '三', '四', '五', '六', '七', '八', '九'];
    }

    public function number(): string
    {
        return '500';
    }

    public function unicodeName(): string
    {
        return 'Han';
    }
}

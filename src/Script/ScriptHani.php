<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHani - Representation of the Han (Hanzi, Kanji, Hanja) script.
 */
class ScriptHani extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hani';
    }

    public function numerals()
    {
        return ['〇', '一', '二', '三', '四', '五', '六', '七', '八', '九'];
    }

    public function number()
    {
        return '500';
    }

    public function unicodeName()
    {
        return 'Han';
    }
}

<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTibt - Representation of the Tibetan script.
 */
class ScriptTibt extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tibt';
    }

    public function numerals()
    {
        return ['༠', '༡', '༢', '༣', '༤', '༥', '༦', '༧', '༨', '༩'];
    }

    public function number()
    {
        return '330';
    }

    public function unicodeName()
    {
        return 'Tibetan';
    }
}

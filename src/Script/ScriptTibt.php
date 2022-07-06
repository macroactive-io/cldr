<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTibt - Representation of the Tibetan script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptTibt extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tibt';
    }

    public function numerals()
    {
        return array('༠', '༡', '༢', '༣', '༤', '༥', '༦', '༧', '༨', '༩');
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

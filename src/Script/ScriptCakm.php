<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCakm - Representation of the Chakma script.
 */
class ScriptCakm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cakm';
    }

    public function numerals()
    {
        return ['𑄶', '𑄷', '𑄸', '𑄹', '𑄺', '𑄻', '𑄼', '𑄽', '𑄾', '𑄿'];
    }

    public function number()
    {
        return '349';
    }

    public function unicodeName()
    {
        return 'Chakma';
    }
}

<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMong - Representation of the Mongolian script.
 */
class ScriptMong extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mong';
    }

    public function numerals()
    {
        return ['᠐', '᠑', '᠒', '᠓', '᠔', '᠕', '᠖', '᠗', '᠘', '᠙'];
    }

    public function number()
    {
        return '145';
    }

    public function unicodeName()
    {
        return 'Mongolian';
    }
}

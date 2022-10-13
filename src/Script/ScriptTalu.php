<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTalu - Representation of the New Tai Lue script.
 */
class ScriptTalu extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Talu';
    }

    public function numerals()
    {
        return ['᧐', '᧑', '᧒', '᧓', '᧔', '᧕', '᧖', '᧗', '᧘', '᧙'];
    }

    public function number()
    {
        return '354';
    }

    public function unicodeName()
    {
        return 'New_Tai_Lue';
    }
}

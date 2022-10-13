<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNkoo - Representation of the N’Ko script.
 */
class ScriptNkoo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Nkoo';
    }

    public function numerals()
    {
        return ['߀', '߁', '߂', '߃', '߄', '߅', '߆', '߇', '߈', '߉'];
    }

    public function number()
    {
        return '165';
    }

    public function unicodeName()
    {
        return 'Nko';
    }
}

<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNkoo - Representation of the N’Ko script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptNkoo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Nkoo';
    }

    public function numerals()
    {
        return array('߀', '߁', '߂', '߃', '߄', '߅', '߆', '߇', '߈', '߉');
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

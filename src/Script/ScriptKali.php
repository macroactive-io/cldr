<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKali - Representation of the Kayah Li script.
 */
class ScriptKali extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Kali';
    }

    public function numerals()
    {
        return ['꤀', '꤁', '꤂', '꤃', '꤄', '꤅', '꤆', '꤇', '꤈', '꤉'];
    }

    public function number()
    {
        return '357';
    }

    public function unicodeName()
    {
        return 'Kayah_Li';
    }
}

<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMtei - Representation of the Meitei Mayek (Meithei, Meetei) script.
 */
class ScriptMtei extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mtei';
    }

    public function numerals()
    {
        return ['꯰', '꯱', '꯲', '꯳', '꯴', '꯵', '꯶', '꯷', '꯸', '꯹'];
    }

    public function number()
    {
        return '337';
    }

    public function unicodeName()
    {
        return 'Meetei_Mayek';
    }
}

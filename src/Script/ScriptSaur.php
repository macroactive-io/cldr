<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSaur - Representation of the Saurashtra script.
 */
class ScriptSaur extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Saur';
    }

    public function numerals()
    {
        return ['꣐', '꣑', '꣒', '꣓', '꣔', '꣕', '꣖', '꣗', '꣘', '꣙'];
    }

    public function number()
    {
        return '344';
    }

    public function unicodeName()
    {
        return 'Saurashtra';
    }
}

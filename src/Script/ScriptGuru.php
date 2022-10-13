<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGuru - Representation of the Gurmukhi script.
 */
class ScriptGuru extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Guru';
    }

    public function numerals()
    {
        return ['੦', '੧', '੨', '੩', '੪', '੫', '੬', '੭', '੮', '੯'];
    }

    public function number()
    {
        return '310';
    }

    public function unicodeName()
    {
        return 'Gurmukhi';
    }
}

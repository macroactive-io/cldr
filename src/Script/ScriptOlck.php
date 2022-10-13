<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOlck - Representation of the Ol Chiki (Ol Cemet’, Ol, Santali) script.
 */
class ScriptOlck extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Olck';
    }

    public function numerals()
    {
        return ['᱐', '᱑', '᱒', '᱓', '᱔', '᱕', '᱖', '᱗', '᱘', '᱙'];
    }

    public function number()
    {
        return '261';
    }

    public function unicodeName()
    {
        return 'Ol_Chiki';
    }
}

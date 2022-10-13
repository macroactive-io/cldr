<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrc - Representation of the Soyombo script.
 */
class ScriptSoyo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Soyo';
    }

    public function number()
    {
        return '329';
    }

    public function unicodeName()
    {
        return 'Soyombo';
    }
}

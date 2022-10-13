<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMahj - Representation of the Mahajani script.
 */
class ScriptMahj extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mahj';
    }

    public function number()
    {
        return '314';
    }

    public function unicodeName()
    {
        return 'Mahajani';
    }
}

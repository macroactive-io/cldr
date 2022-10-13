<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBopo - Representation of the Bopomofo script.
 */
class ScriptBopo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bopo';
    }

    public function number()
    {
        return '285';
    }

    public function unicodeName()
    {
        return 'Bopomofo';
    }
}

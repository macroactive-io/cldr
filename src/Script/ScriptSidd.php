<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSidd - Representation of the Siddham, Siddhaṃ, Siddhamātṛkā script.
 */
class ScriptSidd extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sidd';
    }

    public function number()
    {
        return '302';
    }

    public function unicodeName()
    {
        return 'Siddham';
    }
}

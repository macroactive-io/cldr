<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEgyd - Representation of the Egyptian demotic script.
 */
class ScriptEgyd extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Egyd';
    }

    public function number()
    {
        return '070';
    }
}

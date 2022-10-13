<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNkdb - Representation of the Naxi Dongba script.
 */
class ScriptNkdb extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Nkdb';
    }

    public function number()
    {
        return '085';
    }
}

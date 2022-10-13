<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHant - Representation of the Traditional Han script.
 */
class ScriptHant extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hant';
    }

    public function number()
    {
        return '502';
    }
}

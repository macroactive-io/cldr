<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPsin - Representation of the Proto-Sinaitic script.
 */
class ScriptPsin extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Psin';
    }

    public function number()
    {
        return '103';
    }
}

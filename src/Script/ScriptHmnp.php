<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Nyiakeng Puachue Hmong script.
 */
class ScriptHmnp extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hmnp';
    }

    public function number()
    {
        return '451';
    }

    public function unicodeName()
    {
        return 'Nyiakeng_Puachue_Hmong';
    }
}

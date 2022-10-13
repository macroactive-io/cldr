<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Nyiakeng Puachue Hmong script.
 * @psalm-immutable
 */
class ScriptHmnp extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hmnp';
    }

    public function number(): string
    {
        return '451';
    }

    public function unicodeName(): string
    {
        return 'Nyiakeng_Puachue_Hmong';
    }
}

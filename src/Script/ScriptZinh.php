<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptZinh - Representation of the Code for inherited script script.
 * @psalm-immutable
 */
class ScriptZinh extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zinh';
    }

    public function number(): string
    {
        return '994';
    }

    public function unicodeName(): string
    {
        return 'Inherited';
    }
}

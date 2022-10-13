<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNkgb - Representation of the Nakhi Geba ('Na-'Khi ²Ggŏ-¹baw, Naxi Geba) script.
 * @psalm-immutable
 */
class ScriptNkgb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nkgb';
    }

    public function number(): string
    {
        return '420';
    }
}

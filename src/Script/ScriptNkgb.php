<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Nakhi Geba ('Na-'Khi ²Ggŏ-¹baw, Naxi Geba)
 *
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

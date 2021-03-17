<?php

declare(strict_types=1);

namespace Barryvdh\LaravelIdeHelper;

class Helpers
{
    /**
     * @deprecated This method is no longer in use and will be removed in upcoming versions.
     * @return bool
     */
    public static function isLaravel(): bool
    {
        return class_exists('Illuminate\Foundation\Application');
    }
}

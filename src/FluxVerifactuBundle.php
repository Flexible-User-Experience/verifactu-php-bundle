<?php

namespace Flux\VerifactuBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

/**
 * @author David Romaní <david@flux.cat>
 */
final class FluxVerifactuBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return __DIR__;
    }
}

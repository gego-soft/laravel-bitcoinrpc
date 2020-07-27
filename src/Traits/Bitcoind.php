<?php

namespace Gegosoft\Bitcoin\Traits;

trait Bitcoind
{
    public function bitcoind()
    {
        return app('bitcoind');
    }
}

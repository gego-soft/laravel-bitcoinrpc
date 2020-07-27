<?php

if (! function_exists('bitcoind')) {
    /**
     * Get bitcoind client instance.
     *
     * @return \Gegosoft\Bitcoin\Client
     */
    function bitcoind()
    {
        return app('bitcoind');
    }
}

<?php

namespace Cleanliness\Contracts\Interactor;

use Cleanliness\Contracts\IO\Input\InputBag;

/**
 * Use case interactor factory contract.
 *
 * @package \Cleanliness\Contracts\Interactor
 */
interface Factory
{
    /**
     * Create a use case interactor instance of given type with given input bag.
     *
     * @param  string  $type
     * @param  \Cleanliness\Contracts\IO\Input\InputBag  $input
     * @return \Cleanliness\Contracts\Interactor\Interactor
     */
    public function create(string $type, InputBag $input = null): Interactor;
}

<?php

namespace %namespaces.repositories%;

use %model%;
use %contract%;

use Simian\Repo\Repositories\Eloquent\AbstractRepository;

/**
 * @class       Eloquent%modelName%Repository
 * @package     %namespaces.repositories%
 */
class Eloquent%modelName%Repository extends AbstractRepository implements %contractName%
{
    /**
     * Returns the name of the entity this repository represents.
     *
     * @return string
     */
    public function entity()
    {
        return %modelName%::class;
    }
}

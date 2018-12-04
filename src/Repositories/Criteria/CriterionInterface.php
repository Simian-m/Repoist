<?php

namespace Simian\Repo\Repositories\Criteria;

/**
 * @interface CriterionInterface
 * @package   Simian\Repo\Repositories\Criteria
 */
interface CriterionInterface
{
    /**
     * Apply the criterion to the repository.
     *
     * @param $entity
     *
     * @return mixed
     */
    public function apply($entity);
}

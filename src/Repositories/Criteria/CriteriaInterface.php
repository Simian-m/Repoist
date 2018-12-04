<?php

namespace Simian\Repo\Repositories\Criteria;

/**
 * @interface CriteriaInterface
 * @package   Simian\Repo\Repositories\Criteria
 */
interface CriteriaInterface
{
    /**
     * Apply the criteria found.
     *
     * @param mixed ...$criteria
     *
     * @return mixed
     */
    public function withCriteria(...$criteria);
}

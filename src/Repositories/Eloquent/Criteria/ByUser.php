<?php

namespace Simian\Repo\Repositories\Eloquent\Criteria;

use Simian\Repo\Repositories\Criteria\CriterionInterface;

/**
 * @class   ByUser
 * @package Simian\Repo\Repositories\Eloquent\Criteria
 */
class ByUser implements CriterionInterface
{
    /**
     * User id.
     *
     * @var integer
     */
    protected $userId;

    /**
     * @param $userId
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Apply the query filtering.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $entity
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply($entity)
    {
        return $entity->where('user_id', $this->userId);
    }
}

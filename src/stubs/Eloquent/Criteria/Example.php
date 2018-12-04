<?php

namespace %namespaces.repositories%\Criteria;

use Simian\Repo\Repositories\Criteria\CriterionInterface;

/**
 * @class %criterion%
 * @package %namespaces.repositories%\Criteria
 */
class %criterion% implements CriterionInterface
{
    /**
     * @var string|mixed
     */
    protected $field;

    /**
     * @constructor
     * @param mixed $field
     */
    public function __construct($field)
    {
        $this->field = $field;
    }

    /**
     * Apply the query filtering.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $entity
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply($entity)
    {
        return $entity->where('field', $this->field);
    }
}

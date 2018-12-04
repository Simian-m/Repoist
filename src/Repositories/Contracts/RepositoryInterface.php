<?php

namespace Simian\Repo\Repositories\Contracts;

/**
 * @interface RepositoryInterface
 * @package   Simian\Repo\Repositories\Contracts
 */
interface RepositoryInterface
{
    /**
     * Return all records found.
     *
     * @return array
     */
    public function all();

    /**
     * Return the model identified by $id.
     *
     * @param $id
     *
     * @return mixed
     */
    public function find($id);

    /**
     * Find model by the column and its value.
     *
     * @param string|mixed $column
     * @param mixed        $value
     *
     * @return mixed
     */
    public function findWhere($column, $value);

    /**
     * Find the first model found by the value associated with the column.
     *
     * @param string $column
     * @param mixed  $value
     *
     * @return mixed
     */
    public function findWhereFirst($column, $value);

    /**
     * @param string       $column
     * @param string|array $value
     * @param int          $paginate
     *
     * @return array|Collection|Pagination
     */
    public function findWhereLike($column, $value, $paginate = 0);

    /**
     * @param int $perPage
     *
     * @return mixed
     */
    public function paginate($perPage = 10);

    /**
     * @param array $properties
     *
     * @return mixed
     */
    public function create(array $properties);

    /**
     * @param       $id
     * @param array $properties
     *
     * @return mixed
     */
    public function update($id, array $properties);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete($id);
}

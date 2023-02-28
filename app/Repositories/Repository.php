<?php

namespace App\Repositories;

use Jenssegers\Mongodb\Eloquent\Model;

class Repository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($where)
    {
        // return $this->model->find($id);
        return $this->model->where($where)->first();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($where, array $data)
    {
        $this->model->where($where)->update($data);
        return $data;
    }

    public function delete($where)
    {
        $record = $this->model->where($where)->delete();
        return $record;
    }
}

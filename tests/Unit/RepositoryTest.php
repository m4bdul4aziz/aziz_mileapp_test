<?php

namespace Tests\Unit\Repositories;

use App\Repositories\Repository;
use Jenssegers\Mongodb\Eloquent\Model;
use Mockery;
use Tests\TestCase;

class RepositoryTest extends TestCase
{
    protected $repository;
    protected $modelMock;

    protected function setUp(): void
    {
        parent::setUp();

        // Mock the Model class
        $this->modelMock = Mockery::mock(Model::class);

        // Create a new instance of the Repository, passing in the mocked model
        $this->repository = new Repository($this->modelMock);
    }

    public function testAll()
    {
        // Create a mock collection
        $collectionMock = Mockery::mock(\Illuminate\Support\Collection::class);

        // Mock the all() method on the model to return the collection
        $this->modelMock->shouldReceive('all')->once()->andReturn($collectionMock);

        // Call the all() method on the repository
        $result = $this->repository->all();

        // Assert that the result is the expected collection
        $this->assertEquals($collectionMock, $result);
    }

    public function testFind()
    {
        // Create a mock model instance
        $modelMock = Mockery::mock(Model::class);

        // Mock the where() and first() methods on the model to return the model instance
        $this->modelMock->shouldReceive('where')->once()->with(['id' => 1])->andReturn($modelMock);
        $modelMock->shouldReceive('first')->once()->andReturn($modelMock);

        // Call the find() method on the repository
        $result = $this->repository->find(['id' => 1]);

        // Assert that the result is the expected model instance
        $this->assertEquals($modelMock, $result);
    }

    public function testCreate()
    {
        // Create a mock data array
        $dataMock = [];

        // Create a mock model instance
        $modelMock = Mockery::mock(Model::class);

        // Mock the create() method on the model to return the model instance
        $this->modelMock->shouldReceive('create')->once()->with($dataMock)->andReturn($modelMock);

        // Call the create() method on the repository
        $result = $this->repository->create($dataMock);

        // Assert that the result is the expected model instance
        $this->assertEquals($modelMock, $result);
    }

    public function testUpdate()
    {
        // Create a mock data array and where array
        $dataMock = [];
        $whereMock = ['id' => 1];

        // Mock the where() and update() methods on the model
        $this->modelMock->shouldReceive('where')->once()->with($whereMock)->andReturnSelf();
        $this->modelMock->shouldReceive('update')->once()->with($dataMock);

        // Call the update() method on the repository
        $result = $this->repository->update($whereMock, $dataMock);

        // Assert that the result is the expected data array
        $this->assertEquals($dataMock, $result);
    }

    public function testDelete()
    {
        $where = ['id' => 1];

        $this->modelMock->shouldReceive('where')->once()->with($where)->andReturnSelf();
        $this->modelMock->shouldReceive('delete')->once()->andReturn(1);

        $result = $this->repository->delete($where);

        $this->assertEquals(1, $result);
    }
}

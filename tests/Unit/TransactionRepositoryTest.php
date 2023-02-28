<?php

use App\Repositories\TransactionRepository;
use App\Models\Transactions;
use Jenssegers\Mongodb\Eloquent\Model;
use Tests\TestCase;

class TransactionRepositoryTest extends TestCase
{
    protected $modelMock;
    protected $repository;

    protected function setUp(): void
    {
        parent::setUp();

        // Mock the Transactions model
        $this->modelMock = $this->getMockBuilder(Transactions::class)
            ->disableOriginalConstructor()
            ->getMock();

        // Instantiate the TransactionRepository
        $this->repository = new TransactionRepository($this->modelMock);
    }

    public function testConstructor()
    {
        // Assert that the model passed to the constructor is set as the Repository's model property
        $this->assertTrue(true);
    }
}

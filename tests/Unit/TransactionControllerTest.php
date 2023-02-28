<?php

namespace Tests\Unit;

use App\Http\Controllers\TransactionController;
use App\Repositories\TransactionRepository;
use Illuminate\Http\Request;
use Tests\TestCase;

class TransactionControllerTest extends TestCase
{
    public function testIndex()
    {
        // Arrange
        $transactions = $this->responsePackage();
        $transactionRepositoryMock = $this->getMockBuilder(TransactionRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $transactionRepositoryMock->expects($this->once())
            ->method('all')
            ->willReturn($transactions);
        $controller = new TransactionController($transactionRepositoryMock);

        // Act
        $response = $controller->index();

        // Assert
        $this->assertEquals($transactions, json_decode($response->getContent(), true));
    }

    public function testShow()
    {
        // Arrange
        $transaction = ['_id' => 1];
        $transactionRepositoryMock = $this->getMockBuilder(TransactionRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $transactionRepositoryMock->expects($this->once())
            ->method('find')
            ->with(['transaction_id' => $transaction['_id']])
            ->willReturn($this->responsePackageDetail());
        $controller = new TransactionController($transactionRepositoryMock);

        // Act
        $response = $controller->show($transaction['_id']);

        // Assert
        $this->assertEquals($this->responsePackageDetail(), $response);
    }

    public function testStore()
    {
        // Arrange
        $transaction = [];
        $transactionRepositoryMock = $this->getMockBuilder(TransactionRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $transactionRepositoryMock->expects($this->once())
            ->method('create')
            ->with($transaction)
            ->willReturn($this->responsePackageDetail());
        $request = new Request([], $transaction);
        $controller = new TransactionController($transactionRepositoryMock);

        // Act
        $response = $controller->store($request);

        // Assert
        $this->assertEquals($this->responsePackageDetail(), $response);
    }

    public function testUpdate()
    {
        // Arrange
        $transactionId = 1;
        $updatedTransaction = [];
        $transactionRepositoryMock = $this->getMockBuilder(TransactionRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $transactionRepositoryMock->expects($this->once())
            ->method('update')
            ->with(['transaction_id' => $transactionId], $updatedTransaction)
            ->willReturn($updatedTransaction);
        $request = new Request([], $updatedTransaction);
        $controller = new TransactionController($transactionRepositoryMock);

        // Act
        $response = $controller->update($request, $transactionId);

        // Assert
        $this->assertEquals($updatedTransaction, $response);
    }

    public function testDestroy()
    {
        // Arrange
        $transactionId = 1;
        $transactionRepositoryMock = $this->getMockBuilder(TransactionRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $transactionRepositoryMock->expects($this->once())
            ->method('delete')
            ->with(['transaction_id' => $transactionId]);
        $controller = new TransactionController($transactionRepositoryMock);

        // Act
        $response = $controller->destroy($transactionId);

        // Assert
        $this->assertEquals(
            ['transaction_id' => $transactionId, 'message' => 'Data has been deleted successfully'],
            json_decode($response->getContent(), true)
        );
    }
}

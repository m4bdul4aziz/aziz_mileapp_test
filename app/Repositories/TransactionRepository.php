<?php

namespace App\Repositories;

use App\Models\Transactions;

class TransactionRepository extends Repository
{
    public function __construct(Transactions $transactions)
    {
        parent::__construct($transactions);
    }
}

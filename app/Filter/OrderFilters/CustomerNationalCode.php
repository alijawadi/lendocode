<?php

namespace App\Filter\OrderFilters;

use App\Filter\FilterContract;

class CustomerNationalCode implements FilterContract
{
    public function __construct(protected $query)
    {
    }

    public function handle($value): void
    {
        $this->query->where('customer_national_code', $value);
    }
}

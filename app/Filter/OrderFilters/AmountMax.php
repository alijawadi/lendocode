<?php

namespace App\Filter\OrderFilters;

use App\Filter\FilterContract;
use Illuminate\Database\Eloquent\Builder;

class AmountMax implements FilterContract
{
    public function __construct(protected Builder $query)
    {
    }

    public function handle($value): void
    {
        $this->query->where('amount', '<' , $value);
    }
}

<?php

namespace App\Filter;

interface FilterContract
{
    public function handle($value): void;
}

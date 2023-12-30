<?php

namespace App\Filter;

trait HasFilter
{
    public function scopeFilterBy($query, $filters)
    {
        $filter = new FilterBuilder($query, $filters, $this->getName());

        return $filter->apply();
    }

    private function getName(): ?string
    {
        $path = explode('\\', $this::class);

        return array_pop($path);
    }
}

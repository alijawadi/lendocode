<?php

namespace App\Filter;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class FilterBuilder
{

    public function __construct(
        protected Builder $query,
        protected array  $filters,
        protected string $namespace
    )
    {
        $this->setNameSpace();
    }

    public function apply(): Builder
    {
        foreach ($this->filters as $name => $value) {
            $normailizedName = ucfirst(Str::camel($name));
            $class = $this->namespace . "\\{$normailizedName}";

            if (!class_exists($class)) {
                continue;
            }

            if (strlen($value)) {
                (new $class($this->query))->handle($value);
            } else {
                (new $class($this->query))->handle();
            }
        }

        return $this->query;
    }

    private function setNameSpace(): void
    {
        $this->namespace = "App\\Filter\\" . $this->namespace . "Filters";
    }
}

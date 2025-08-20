<?php

namespace JaOcero\RadioDeck\Traits;

use Closure;

trait HasGap
{
    protected string|Closure|null $gap = null;

    public function gap(Closure|bool|null $condition = true): static
    {
        $this->gap = $condition;
        return $this;
    }

    public function getGap(): ?string
    {
        return $this->evaluate($this->gap);
    }
}

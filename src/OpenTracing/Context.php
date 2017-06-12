<?php

namespace OpenTracing;

use TracingContext\TracingContext;

final class Context
{
    private $context;

    private function __construct(TracingContext $context)
    {
        $this->context = $context;
    }

    public static function create(TracingContext $context)
    {
        return new self($context);
    }

    public static function createAsDefault()
    {
        return new self(TracingContext::create());
    }

    /** @return TracingContext */
    public function context()
    {
        return $this->context;
    }
}

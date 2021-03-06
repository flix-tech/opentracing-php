<?php

namespace OpenTracing\Exceptions;

use InvalidArgumentException;

final class InvalidReferenceArgument extends InvalidArgumentException
{
    public static function emptyType()
    {
        return new self('Reference type can not be an empty string');
    }

    public static function invalidContext($context)
    {
        return new self(sprintf(
            'Reference expects \OpenTracing\Span or \OpenTracing\SpanContext as context, got %s',
            is_object($context) ? get_class($context) : gettype($context)
        ));
    }
}

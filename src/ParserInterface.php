<?php

namespace daman05\parser;

interface ParserInterface
{
    public function process(string $url, string $tag): array;
}

<?php

namespace daman05\parser;

class Parser implements ParserInterface
{
    public function process(string $url, string $tag): array
    {
        $htmlPage = file_get_contents($url);

        if ($htmlPage === false) {
            return ['invalid URL'];
        }

        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);

        if (empty($strings[1])) {
            return ['There are no such tags on the page'];
        }

        return $strings[1];
    }
}

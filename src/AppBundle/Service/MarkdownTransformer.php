<?php
/**
 * Created by PhpStorm.
 * User: fredrsf
 * Date: 20.06.16
 * Time: 20:32
 */

namespace AppBundle\Service;


class MarkdownTransformer
{
    private $markdownParser;

    public function __construct(MarkdownParserInterface $markdownParser)
    {
        $this->markdownParser = $markdownParser;
    }

    public function parse($str)
    {
        return $this->markdownParser->transformMarkdown($str);
    }
}
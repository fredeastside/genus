<?php
/**
 * Created by PhpStorm.
 * User: fredrsf
 * Date: 21.06.16
 * Time: 21:37
 */

namespace AppBundle\Twig;

use AppBundle\Service\MarkdownTransformer;

class MarkdownExtension extends \Twig_Extension
{
    private $markdownTransformer;

    public function __construct(MarkdownTransformer $markdownTransformer)
    {
        $this->markdownTransformer = $markdownTransformer;
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('markdownify', [
                $this, 'parseMarkdown'
            ], [
                'is_safe' => ['html']
            ])
        ];
    }

    public function parseMarkdown($str)
    {
        return $this->markdownTransformer->parse($str);
    }


    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'app_markdown';
    }
}
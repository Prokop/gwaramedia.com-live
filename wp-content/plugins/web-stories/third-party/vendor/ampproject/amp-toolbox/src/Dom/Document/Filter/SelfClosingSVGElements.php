<?php

namespace Google\Web_Stories_Dependencies\AmpProject\Dom\Document\Filter;

use Google\Web_Stories_Dependencies\AmpProject\Dom\Document\AfterSaveFilter;
use Google\Web_Stories_Dependencies\AmpProject\Dom\Document\BeforeLoadFilter;
use Google\Web_Stories_Dependencies\AmpProject\Html\Tag;
/**
 * Filter to secure and restore self-closing SVG related elements.
 *
 * @package ampproject/amp-toolbox
 */
final class SelfClosingSVGElements implements BeforeLoadFilter, AfterSaveFilter
{
    /**
     * SVG elements that are self-closing.
     *
     * @var string[]
     */
    const SELF_CLOSING_TAGS = [Tag::CIRCLE, Tag::G, Tag::PATH];
    /**
     * Force all self-closing tags to have closing tags.
     *
     * @param string $html HTML string to adapt.
     * @return string Adapted HTML string.
     */
    public function beforeLoad($html)
    {
        static $regexPattern = null;
        if (null === $regexPattern) {
            $regexPattern = '#<(' . \implode('|', self::SELF_CLOSING_TAGS) . ')([^>]*?)(?>\\s*(?<!\\\\)/)?>(?!.*</\\1>)#';
        }
        return \preg_replace($regexPattern, '<$1$2></$1>', $html);
    }
    /**
     * Restore all self-closing tags again.
     *
     * @param string $html HTML string to adapt.
     * @return string Adapted HTML string.
     */
    public function afterSave($html)
    {
        static $regexPattern = null;
        if (null === $regexPattern) {
            $regexPattern = '#<(' . \implode('|', self::SELF_CLOSING_TAGS) . ')([^>]*?)(?>\\s*(?<!\\\\)\\/)?>(<\\/\\1>)#i';
        }
        return \preg_replace($regexPattern, '<$1$2 />', $html);
    }
}

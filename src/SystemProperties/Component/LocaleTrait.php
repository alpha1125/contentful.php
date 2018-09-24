<?php

/**
 * This file is part of the contentful/contentful package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Delivery\SystemProperties\Component;

trait LocaleTrait
{
    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }
}

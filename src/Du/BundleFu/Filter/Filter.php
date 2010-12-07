<?php
/**
 * Du
 *
 * LICENSE
 *
 * This source file is subject to the BSD license that is available
 * through the world-wide-web at this URL:
 * https://github.com/dotsunited/du-bundlefu/blob/master/LICENSE
 *
 * @category   Du
 * @package    Du_BundleFu
 * @subpackage Filter
 * @copyright  Copyright (C) 2010 - Present, Jan Sorgalla
 * @license    BSD License {@link https://github.com/dotsunited/du-bundlefu/blob/master/LICENSE}
 */

namespace Du\BundleFu\Filter;

/**
 * Du\BundleFu\Filter\Filter
 *
 * @category   Du
 * @package    Du_BundleFu
 * @subpackage Filter
 * @author     Jan Sorgalla
 * @copyright  Copyright (C) 2010 - Present, Jan Sorgalla
 * @license    BSD License {@link https://github.com/dotsunited/du-bundlefu/blob/master/LICENSE}
 * @version    @package_version@
 */
interface Filter
{
    /**
     * Returns the result of filtering $content
     *
     * @param mixed $content
     * @return mixed
     */
    public function filter($content);
}

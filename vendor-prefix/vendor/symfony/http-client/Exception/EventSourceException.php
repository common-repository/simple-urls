<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace LassoLiteVendor\Symfony\Component\HttpClient\Exception;

use LassoLiteVendor\Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class EventSourceException extends \RuntimeException implements DecodingExceptionInterface
{
}

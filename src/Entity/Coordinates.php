<?php
declare(strict_types=1);
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2017-2019 Michael Dekker (https://github.com/firstred)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
 * associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software
 * is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
 * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @author    Michael Dekker <git@michaeldekker.nl>
 *
 * @copyright 2017-2019 Michael Dekker
 *
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Firstred\PostNL\Entity;

/**
 * Class Coordinates
 */
class Coordinates extends AbstractEntity
{
    /**
     * @var string|null $latitude
     *
     * @since 1.0.0
     */
    protected $latitude;

    /**
     * @var string|null $longitude
     *
     * @since 1.0.0
     */
    protected $longitude;

    /**
     * @param string $lat
     * @param string $long
     */
    public function __construct($lat = null, $long = null)
    {
        parent::__construct();

        $this->setLatitude($lat);
        $this->setLongitude($long);
    }

    /**
     * @return string|null
     *
     * @since 2.0.0 Strict typing
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @param string|null $latitude
     *
     * @return static
     *
     * @since 2.0.0 Strict typing
     */
    public function setLatitude(?string $latitude): Coordinates
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return string|null
     *
     * @since 2.0.0 Strict typing
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @param string|null $longitude
     *
     * @return static
     *
     * @since 2.0.0 Strict typing
     */
    public function setLongitude(?string $longitude): Coordinates
    {
        $this->longitude = $longitude;

        return $this;
    }
}

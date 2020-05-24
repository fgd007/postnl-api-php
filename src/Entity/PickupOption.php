<?php

declare(strict_types=1);

/**
 * The MIT License (MIT).
 *
 * Copyright (c) 2017-2020 Michael Dekker (https://github.com/firstred)
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
 * @copyright 2017-2020 Michael Dekker
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Firstred\PostNL\Entity;

/**
 * Class PickupOption.
 */
final class PickupOption extends AbstractEntity implements PickupOptionInterface
{
    /**
     * Pickup date.
     *
     * @pattern N/A
     *
     * @example N/A
     *
     * @var string|null
     *
     * @since 2.0.0
     */
    private $pickupDate;

    /**
     * Shipping date.
     *
     * @pattern N/A
     *
     * @example N/A
     *
     * @var string|null
     *
     * @since 2.0.0
     */
    private $shippingDate;

    /**
     * Options.
     *
     * @pattern N/A
     *
     * @example N/A
     *
     * @var string|null
     *
     * @since 2.0.0
     */
    private $option;

    /**
     * Locations.
     *
     * @pattern N/A
     *
     * @example N/A
     *
     * @var LocationsInterface|null
     *
     * @since   2.0.0
     */
    private $locations;

    /**
     * Get pickupDate.
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   PickupOption::$pickupDate
     */
    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }

    /**
     * Set pickupDate.
     *
     * @pattern N/A
     *
     * @example N/A
     *
     * @param string|null $pickupDate
     *
     * @return static
     *
     * @since   2.0.0
     * @see     PickupOption::$pickupDate
     */
    public function setPickupDate(?string $pickupDate): PickupOptionInterface
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }

    /**
     * Get shippingDate.
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   PickupOption::$shippingDate
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }

    /**
     * Set shippingDate.
     *
     * @pattern N/A
     *
     * @example N/A
     *
     * @param string|null $shippingDate
     *
     * @return static
     *
     * @since   2.0.0
     * @see     PickupOption::$shippingDate
     */
    public function setShippingDate(?string $shippingDate): PickupOptionInterface
    {
        $this->shippingDate = $shippingDate;

        return $this;
    }

    /**
     * Get option.
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   PickupOption::$option
     */
    public function getOption(): ?string
    {
        return $this->option;
    }

    /**
     * Set option.
     *
     * @pattern N/A
     *
     * @example N/A
     *
     * @param string|null $option
     *
     * @return static
     *
     * @since   2.0.0
     * @see     PickupOption::$option
     */
    public function setOption(?string $option): PickupOptionInterface
    {
        $this->option = $option;

        return $this;
    }

    /**
     * Get locations.
     *
     * @return LocationsInterface|null
     *
     * @since 2.0.0
     * @see   PickupOption::$locations
     */
    public function getLocations(): ?LocationsInterface
    {
        return $this->locations;
    }

    /**
     * Set locations.
     *
     * @pattern N/A
     *
     * @param LocationsInterface|null $locations
     *
     * @return static
     *
     * @example N/A
     *
     * @since   2.0.0
     * @see     PickupOption::$locations
     */
    public function setLocations(?LocationsInterface $locations): PickupOptionInterface
    {
        $this->locations = $locations;

        return $this;
    }
}

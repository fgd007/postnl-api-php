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

namespace Firstred\PostNL\Entity\Request;

use Firstred\PostNL\Entity\AbstractEntity;
use Firstred\PostNL\Exception\InvalidArgumentException;

/**
 * Class CalculateShippingDateRequest.
 *
 * This class is both the container and can be the actual CalculateShippingDateRequest object itself!
 */
final class CalculateShippingDateRequest extends AbstractEntity implements CalculateShippingDateRequestInterface
{
    /**
     * Delivery date.
     *
     * @pattern ^(?:[0-3]\d-[01]\d-[12]\d{3})$
     *
     * @example 03-07-2019
     *
     * @var string|null
     *
     * @since   2.0.0
     */
    private $deliveryDate;

    /**
     * The duration it takes for the shipment to be delivered to PostNL in days. A value of 1 means that the parcel will be delivered to PostNL on the same day as the date specified in ShippingDate.
     * A value of 2 means the parcel will arrive at PostNL a day later etc.
     *
     * @pattern ^\d{1,10}$
     *
     * @example 2
     *
     * @var int|null
     *
     * @since   2.0.0
     */
    private $shippingDuration;

    /**
     * Zip / postal code.
     *
     * @example 2132WT
     *
     * @var string|null
     *
     * @pattern ^.{0,10}$
     *
     * @since   2.0.0
     */
    private $postalCode;

    /**
     * Country code.
     *
     * @pattern ^(?:NL|BE))$
     *
     * @example NL
     *
     * @var string|null
     *
     * @since   2.0.0
     */
    private $countryCode;

    /**
     * Origin country code.
     *
     * @pattern ^(?:NL|BE))$
     *
     * @example NL
     *
     * @var string|null
     *
     * @since   2.0.0
     */
    private $originCountryCode;

    /**
     * City.
     *
     * @pattern ^.{0,35}$
     *
     * @example Hoofddorp
     *
     * @var string|null
     *
     * @since   2.0.0
     */
    private $city;

    /**
     * The street name of the delivery address.
     *
     * @pattern ^.{0,95}$
     *
     * @example Siriusdreef
     *
     * @var string|null
     *
     * @since   2.0.0
     */
    private $street;

    /**
     * House number.
     *
     * @pattern ^\d{1,10}$
     *
     * @example 42
     *
     * @var int|null
     *
     * @since   2.0.0
     */
    private $houseNumber;

    /**
     * House number extension.
     *
     * @example A
     *
     * @var string|null
     *
     * @pattern ^.{0,35}$
     *
     * @since   2.0.0
     */
    private $houseNrExt;

    /**
     * Get zip / postal code.
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   CalculateShippingDateRequest::$postalCode
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Set the zip / postcode.
     *
     * @pattern ^.{0,10}$
     *
     * @example 2132WT
     *
     * @param string|null $postcode
     *
     * @return static
     *
     * @throws InvalidArgumentException
     *
     * @since   2.0.0
     * @see     CalculateShippingDateRequest::$postalCode
     */
    public function setPostalCode(?string $postcode = null): CalculateShippingDateRequest
    {
        $this->postalCode = $this->validate->postcode($postcode);

        return $this;
    }

    /**
     * Get city.
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   CalculateShippingDateRequest::$city
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set city.
     *
     * @pattern ^.{0,35}$
     *
     * @example Hoofddorp
     *
     * @param string|null $city
     *
     * @return static
     *
     * @throws InvalidArgumentException
     *
     * @since   2.0.0
     * @see     CalculateShippingDateRequest::$city
     */
    public function setCity(?string $city): CalculateShippingDateRequest
    {
        $this->city = $this->validate->city($city);

        return $this;
    }

    /**
     * Get country code.
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   CalculateShippingDateRequest::$countryCode
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Set country code.
     *
     * @pattern ^(?:NL|BE)$
     *
     * @example NL
     *
     * @param string|null $countryCode
     *
     * @return static
     *
     * @throws InvalidArgumentException
     *
     * @since   2.0.0
     * @see     CalculateShippingDateRequest::$countryCode
     */
    public function setCountryCode(?string $countryCode): CalculateShippingDateRequest
    {
        $this->countryCode = $this->validate->isoAlpha2CountryCodeNlBe($countryCode);

        return $this;
    }

    /**
     * Get house number.
     *
     * @return int|null
     *
     * @since 2.0.0
     * @see   CalculateShippingDateRequest::$houseNumber
     */
    public function getHouseNumber(): ?int
    {
        return $this->houseNumber;
    }

    /**
     * Set house number.
     *
     * @pattern ^\d{1,10}$
     *
     * @example 42
     *
     * @param string|int|float|null $houseNumber
     *
     * @return static
     *
     * @throws InvalidArgumentException
     *
     * @since   2.0.0
     * @see     CalculateShippingDateRequest::$houseNumber
     */
    public function setHouseNumber($houseNumber): CalculateShippingDateRequest
    {
        $this->houseNumber = $this->validate->integer($houseNumber);

        return $this;
    }

    /**
     * Get house number extension.
     *
     * Get house number extension
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   CalculateShippingDateRequest::$houseNrExt
     */
    public function getHouseNrExt(): ?string
    {
        return $this->houseNrExt;
    }

    /**
     * Set house number extension.
     *
     * @pattern ^.{0,35}$
     *
     * @example A
     *
     * @param string|null $houseNrExt
     *
     * @return static
     *
     * @throws InvalidArgumentException
     *
     * @since   2.0.0
     * @see     CalculateShippingDateRequest::$houseNrExt
     */
    public function setHouseNrExt(?string $houseNrExt): CalculateShippingDateRequest
    {
        $this->houseNrExt = $this->validate->genericString($houseNrExt);

        return $this;
    }

    /**
     * Get origin country code.
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   CalculateShippingDateRequest::$originCountryCode
     */
    public function getOriginCountryCode(): ?string
    {
        return $this->originCountryCode;
    }

    /**
     * Set origin country code.
     *
     * @pattern ^(?:NL|BE)$
     *
     * @example NL
     *
     * @param string|null $originCountryCode
     *
     * @return static
     *
     * @throws InvalidArgumentException
     *
     * @since   2.0.0
     * @see     CalculateShippingDateRequest::$originCountryCode
     */
    public function setOriginCountryCode(?string $originCountryCode): CalculateShippingDateRequest
    {
        $this->originCountryCode = $this->validate->isoAlpha2CountryCodeNlBe($originCountryCode);

        return $this;
    }

    /**
     * Get shipping date.
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   CalculateShippingDateRequest::$deliveryDate
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    /**
     * Set shipping date.
     *
     * @pattern ^(?:[0-3]\d-[01]\d-[12]\d{3}\s+)[0-2]\d:[0-5]\d(?:[0-5]\d)$
     *
     * @example 03-07-2019 17:00:00
     *
     * @param string|null $deliveryDate
     *
     * @return static
     *
     * @throws InvalidArgumentException
     *
     * @since   2.0.0
     * @see     CalculateShippingDateRequest::$deliveryDate
     */
    public function setDeliveryDate(?string $deliveryDate): CalculateShippingDateRequest
    {
        $this->deliveryDate = $this->validate->date($deliveryDate);

        return $this;
    }

    /**
     * Get shipping duration.
     *
     * @return int|null
     *
     * @since 2.0.0
     * @see   CalculateShippingDateRequest::$shippingDuration
     */
    public function getShippingDuration(): ?int
    {
        return $this->shippingDuration;
    }

    /**
     * Set shipping duration.
     *
     * @pattern ^\d{1,10}$
     *
     * @example 2
     *
     * @param int|float|string|null $shippingDuration
     *
     * @return static
     *
     * @throws InvalidArgumentException
     *
     * @since   2.0.0
     * @see     CalculateShippingDateRequest::$shippingDuration
     */
    public function setShippingDuration($shippingDuration): CalculateShippingDateRequest
    {
        $this->shippingDuration = $this->validate->integer($shippingDuration);

        return $this;
    }

    /**
     * Get street.
     *
     * @return string|null
     *
     * @since 2.0.0
     * @see   CalculateShippingDateRequest::$street
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Set street.
     *
     * @pattern ^.{0,95}$
     *
     * @example Siriusdreef
     *
     * @param string|null $street
     *
     * @return static
     *
     * @throws InvalidArgumentException
     *
     * @since   2.0.0
     * @see     CalculateShippingDateRequest::$street
     */
    public function setStreet(?string $street): CalculateShippingDateRequest
    {
        $this->street = $this->validate->street($street);

        return $this;
    }
}

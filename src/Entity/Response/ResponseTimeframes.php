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

namespace Firstred\PostNL\Entity\Response;

use Firstred\PostNL\Entity\AbstractEntity;
use Firstred\PostNL\Entity\ReasonNoTimeframe;
use Firstred\PostNL\Entity\Timeframe;
use TypeError;

/**
 * Class ResponseTimeframes
 */
class ResponseTimeframes extends AbstractEntity
{
    /**
     * @var ReasonNoTimeframe[]|null $reasonNoTimeframes
     *
     * @since 1.0.0
     */
    protected $reasonNoTimeframes;

    /**
     * @var Timeframe[]|null $timeframes
     *
     * @since 1.0.0
     */
    protected $timeframes;

    /**
     * @param ReasonNoTimeframe[]|null $noTimeframes
     * @param Timeframe[]|null         $timeframes
     *
     * @throws TypeError
     *
     * @since 1.0.0
     * @since 2.0.0 Strict typing
     */
    public function __construct(array $noTimeframes = null, array $timeframes = null)
    {
        parent::__construct();

        $this->setReasonNoTimeframes($noTimeframes);
        $this->setTimeframes($timeframes);
    }

    /**
     * Return a serializable array for `json_encode`
     *
     * @return array
     *
     * @since 1.0.0
     * @since 2.0.0 Strict typing
     */
    public function jsonSerialize(): array
    {
        $json = [];
        foreach (array_keys(get_class_vars(static::class)) as $propertyName) {
            if (in_array(ucfirst($propertyName), ['Id'])) {
                continue;
            }
            if (isset($this->{$propertyName})) {
                if ('ReasonNoTimeframes' === $propertyName) {
                    $noTimeframes = [];
                    foreach ($this->reasonNoTimeframes as $noTimeframe) {
                        $noTimeframes[] = $noTimeframe;
                    }
                    $json['ReasonNotimeframes'] = ['ReasonNoTimeframe' => $noTimeframes];
                } elseif ('Timeframes' === $propertyName) {
                    $timeframes = [];
                    foreach ($this->timeframes as $timeframe) {
                        $timeframes[] = $timeframe;
                    }
                    $json[ucfirst($propertyName)] = ['Timeframe' => $timeframes];
                } else {
                    $json[ucfirst($propertyName)] = $this->{$propertyName};
                }
            }
        }

        return $json;
    }

    /**
     * @return ReasonNoTimeframe[]|null
     *
     * @since 1.0.0
     * @since 2.0.0 Strict typing
     */
    public function getReasonNoTimeframes(): ?array
    {
        return $this->reasonNoTimeframes;
    }

    /**
     * @param ReasonNoTimeframe[]|null $reasonNoTimeframes
     *
     * @return static
     *
     * @throws TypeError
     *
     * @since 1.0.0
     * @since 2.0.0 Strict typing
     */
    public function setReasonNoTimeframes(?array $reasonNoTimeframes): ResponseTimeframes
    {
        $this->reasonNoTimeframes = $reasonNoTimeframes;

        return $this;
    }

    /**
     * @return Timeframe[]|null
     *
     * @since 1.0.0
     * @since 2.0.0 Strict typing
     */
    public function getTimeframes(): ?array
    {
        return $this->timeframes;
    }

    /**
     * @param Timeframe[]|null $timeframes
     *
     * @return static
     *
     * @throws TypeError
     *
     * @since 1.0.0
     * @since 2.0.0 Strict typing
     */
    public function setTimeframes(?array $timeframes): ResponseTimeframes
    {
        $this->timeframes = $timeframes;

        return $this;
    }
}

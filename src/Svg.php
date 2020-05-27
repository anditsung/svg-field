<?php

namespace Tsung\SvgField;

use Laravel\Nova\Fields\Field;

class Svg extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'svg-field';

    /**
     * The number of rows used for the textarea.
     *
     * @var int
     */
    public $rows = 5;

    public $width = 200;

    public $height = 24;

    public function __construct($name = 'SVG', $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
    }

    /**
     * Set the number of rows used for the textarea.
     *
     * @param  int $rows
     * @return $this
     */
    public function rows($rows)
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * Set width of the svg
     *
     * @param $width
     * @return $this
     */
    public function width($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Set height of the svg
     *
     * @param $height
     * @return $this
     */
    public function height($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Resolve the field's value for display.
     *
     * @param  mixed  $resource
     * @param  string|null  $attribute
     * @return void
     */
    public function resolveForDisplay($resource, $attribute = null)
    {
        parent::resolveForDisplay($resource, $attribute);

        return $this->value = e($this->value);
    }

    /**
     * Prepare the element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'rows' => $this->rows,
            'width' => $this->width,
            'height' => $this->height,
            'viewBox' => "0 0 {$this->width} {$this->height}",
        ]);
    }
}

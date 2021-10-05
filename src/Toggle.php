<?php

namespace Amid\NovaToggle;

use Laravel\Nova\Fields\Boolean;

class Toggle extends Boolean
{
    public $component = 'nova-toggle';

    /**
     * Set the toast message shown when enabling the boolean
     *
     * @param string $message
     * @return $this
     */
    public function enableMessage($message = 'Enabled')
    {
        $message = $message ? $message : __('Enabled');
        return $this->withMeta(['enableMessage' => $message]);
    }

    /**
     * Set the toast message shown when disabling the boolean
     *
     * @param string $message
     * @return $this
     */
    public function disableMessage($message = 'Disabled')
    {
        $message = $message ? $message : __('Disabled');
        return $this->withMeta(['disableMessage' => $message]);
    }

    /**
     * Enable inline editing on index view.
     *
     * @param Closure|bool $callback
     * @return $this
     */
    public function inlineOnIndex($callback = true)
    {
        return $this->withMeta(['inlineIndex' => $callback]);
    }

    /**
     * Enable inline editing on detail view.
     *
     * @param Closure|bool $callback
     * @return $this
     */
    public function inlineOnDetail($callback = true)
    {
        return $this->withMeta(['inlineDetail' => $callback]);
    }

    /**
     * Set the true text shown when boolean is not inline
     *
     * @param string $value
     * @return $this
     */
    public function trueText($value)
    {
        return $this->withMeta(['trueText' => $value]);
    }

    /**
     * Set the false text shown when boolean is not inline
     *
     * @param string $value
     * @return $this
     */
    public function falseText($value)
    {
        return $this->withMeta(['falseText' => $value]);
    }

    /**
     * Show text beside the checkbox on the index page
     *
     * @param Closure|bool $callback
     * @return $this
     */
    public function textOnIndex($callback = true)
    {
        return $this->withMeta(['textOnIndex' => $callback]);
    }

    public function showLabels()
    {
        return $this->withMeta([
            'show_true_label' => true,
            'show_false_label' => true,
        ]);
    }

    public function showOnlyTrueLabel()
    {
        return $this->withMeta([
            'show_true_label' => true,
            'show_false_label' => false,
        ]);
    }

    public function showOnlyFalseLabel()
    {
        return $this->withMeta([
            'show_true_label' => false,
            'show_false_label' => true,
        ]);
    }

    public function hideLabelOnIndex()
    {
        return $this->withMeta([
            'hide_label_on_index' => true,
        ]);
    }

    public function width($width)
    {
        return $this->withMeta([
            'width' => $width,
            'height' => round($width/(60/26),0),
        ]);
    }

    public function height($height)
    {
        return $this->withMeta([
            'height' => $height,
        ]);
    }

    public function trueColor($colour)
    {
        return $this->withMeta([
            'true_color' => $colour,
        ]);
    }

    public function falseColor($colour)
    {
        return $this->withMeta([
            'false_color' => $colour,
        ]);
    }

    public function speed($ms)
    {
        return $this->withMeta([
            'speed' => $ms,
        ]);
    }

}

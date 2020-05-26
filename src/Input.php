<?php

namespace App;

abstract class Input
{
    /**
     * Input Name
     *
     * @var string
     */
    public $name;
    /**
     * Class Name
     * @var string
     */
    public $class;
    /**
     * Label For
     * @var string
     */
    public  $label;

    /**
     * input Value
     *
     * @var [mixed]
     */
    public $value;

    /**
     * Input Id 
     *
     * @var [mixed]
     */
    public $id;
    /**
     * PlaceHolder
     *
     * @var [mixed]
     */
    public $placeholder;

    public function __construct()
    {
        $this->id = '';
    }

    /**
     * Set Name
     *
     * @param [string] $name
     * @return this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Set class
     *
     * @param [string] $class
     * @return this
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }
    /**
     * Set Label
     *
     * @param [string] $label
     * @return this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Set Input Value
     *
     * @param [mixed] $value
     * @return this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Set Id
     *
     * @param [mixed] $id
     * @return this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Undocumented function
     * @param [mixed] $id
     * @return this
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }
}

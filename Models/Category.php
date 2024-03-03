<?php

class Category
{
    private $name;
    private $icon;

    public function __construct($name, $icon)
    {
        $this->setName($name);
        $this->setIcon($icon);
    }



    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }



    public function getIcon()
    {
        return $this->icon;
    }
    public function setIcon($icon): self
    {
        $this->icon = $icon;
        return $this;
    }
}

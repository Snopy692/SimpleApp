<?php

namespace App\Core;

class Form
{
    private $inputs;
    private $formId;

    public function __construct(string $formId)
    {
        $this->formId = $formId;
    }

    public function get()
    {

    }

    public function addTextfield(string $name)
    {
        
    }

    public function addTextarea(string $name)
    {
        
    }

    public function addSelect(string $name)
    {
        
    }

    public function addButton(string $name)
    {
        
    }

    public function addRadio(string $name)
    {
        
    }

    public function addCheckbox(string $name)
    {
        
    }

    public function addCheckboxes(string $name)
    {
        
    }

    public function open(string $action = '', string $method = 'POST')
    {
        return '<form action="'.$action.'" method="'.$method.'">';
    }

    public function close()
    {
        return '</form>';
    }
}

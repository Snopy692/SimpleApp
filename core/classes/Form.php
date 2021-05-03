<?php

namespace App\Core;

class Form
{
    private $inputs;
    private $formId;
    private $inputStructure;

    public function __construct(string $formId)
    {
        $this->formId = $formId;
        $this->inputStructure = [
            'label' => null,
            'type' => '',
            'attributes' => [
                'class' => ['form-control']
            ]
        ];
    }

    public function get($name)
    {
        $output = '';

        if(!array_key_exists($name, $this->inputs)) {
            return $output;
        }

        if($this->inputs[$name]['label']) {
            $output = '<label class="form-label">'.$this->inputs[$name]['label'].'</label>';
        }

        switch ($this->inputs[$name]['type']) {
        case 'text':
            $output.='<input type="text" '.self::setAttributes($this->inputs[$name]['attributes']).'>';
            break;
            
        default:
            break;
        }

        return $output;
    }


    private function prepareLabel(string $label)
    {

        $label = strip_tags($label);
        $label = stripslashes($label);

        return $label;
    }

    public function addTextfield(string $name, ?string $label, array $attributes = [])
    {
        $this->inputs[$name] = $this->inputStructure;
        $this->inputs[$name]['type'] = 'text';
        $this->inputs[$name]['label'] = self::prepareLabel($label);
        $this->inputs[$name]['attributes'] = array_merge($this->inputs[$name]['attributes'], $attributes);
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

    private function setAttributes(array $attributes)
    {
        $output = array_map(
            function ($key) use ($attributes) {

                if($key=='class') {
                    $attributes[$key]=implode(' ', $attributes[$key]);
                }

                return $key.'="'.$attributes[$key].'"';
            }, array_keys($attributes)
        );
    
        return implode(' ', $output);
    }

}

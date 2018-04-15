<?php
/**
 * Created by PhpStorm.
 * User: tashik
 * Date: 15.04.2018
 * Time: 20:06
 */

namespace Anketa\Form;

use Zend\Form\Form;

class AnketaForm extends Form
{
    public function __construct($name = null)
    {
        // We will ignore the name provided to the constructor
        parent::__construct('anketa');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'last_name',
            'type' => 'text',
            'options' => [
                'label' => 'Фамилия',
            ],
        ]);
        $this->add([
            'name' => 'first_name',
            'type' => 'text',
            'options' => [
                'label' => 'Имя',
            ],
        ]);
        $this->add([
            'name' => 'age',
            'type' => 'text',
            'options' => [
                'label' => 'Возраст',
            ],
        ]);
        $this->add([
            'name' => 'weight',
            'type' => 'text',
            'options' => [
                'label' => 'Вес, кг',
            ],
        ]);
        $this->add([
            'name' => 'height',
            'type' => 'text',
            'options' => [
                'label' => 'Рост, см',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Сохранить',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}
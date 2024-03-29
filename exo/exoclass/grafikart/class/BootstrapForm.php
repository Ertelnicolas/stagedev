<?php
namespace Tutoriel;

class BootstrapForm extends Form
{
    /**
     * @param $html string Code HTML a entourer
     * @return string
     */
    protected function surround($html)
    {
        return '<div class="form-group">'.$html.'</div>';
    }



    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }




    public function input ($name)
    {
        
        return $this->surround(
            '<label>'.$name.'</label>
            <input type="text" name="'.$name.'" value="'.$this->getValue($name).'" class="form-control">');
    }
}
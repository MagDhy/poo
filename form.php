<?php
/**
 * class Form
 * Permet de générer un formulaire rapidement et simplement.
 */

class Form{

    /**
     * @var array données utilisées par le formulaire.
     */
    private $data;

    /**
     * @var string tag utilisé pour entourer les champs.
     */
    public $surround = 'p';

    /**
     * @param array $data données utilisées par le formulaire.
     */
    public function __construct($data = array()){
        $this->data = $data;
    }

    //Il faut trouver un autre moyen d'écrire les echo car il y a une erreur.

    /**
     * @param string $action that's where the data of the form are send to.
     * @param string $method that's the method of transmission http
     * @param array $main that's the elements of the form.
     */
    public function create_form($action, $method, $main){
        return '<form action="' . $action . '" method="' . $method . '">' . $main . '</form>';
    }

    /**
     * @param $html code HTML à entourer.
     * @return string
     */
    private function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    /**
     * @param string $index index de la valeur à récupérer.
     * @return string
     */
    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param string $name
     * @return string
     * problem à fixer mais quoi ?
     */
    public function input($name){
        return $this->surround('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '"');
    }

    /**
     * @param string $id the id of the select element in html
     * @param array $options an arrays with the options of the select
     * @return string the select with all the options
     */
    public function select($id, $options){
        $balise_ouvr = '<select id="' . $id . '">';
        $balise_opt = '';
        foreach($options as $i => $value){
            $balise_opt += '<option>' . $options[$i] . '</option>';        
        }
        $balise_ferm = '</select>';
        return $this->surround($balise_ouvr . $balise_opt . $balise_ferm); 
    }

    /**
     * @param string $id the id of the textarea element in html
     * @param int $cols the number of columns of the textarea's zone
     * @param int $rows the number of rows of the textarea's zone
     * @return string
     */
    public function textarea($id, $cols, $rows){
        return $this->surrround('<textarea id="' . $id . '" cols="' . $cols . '" rows="' . $rows . '"></textarea>');
    }

    /**
     * @param string $id the id of the html element
     * @param string $name
     * @param string $value the value of the radio element
     */
    public function radio($id,$name,$value){
        $label = '<label for="' . $value . '" >' . $value . '</label>';
        return $this->surround('<input type="radio" id="' . $id . '" name="' . $name . '" value="' . $value . '">'. ' ' . $label);
    }

    /**
     * @param string $id the id of the html element
     * @param string $name
     * @param string $value the value of the checkbox element
     */
    public function checkbox($id, $name, $value){
        $label = '<label for="' . $name . '">' . $value . '</label>';
        return $this->surround('<input type="checkbox" id="' . $id . '" name="' . $name . '" value="' . $value . '">');
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit">Send</button>');
    }
}
?>
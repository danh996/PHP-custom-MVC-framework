<?php
class Validate{
    private $_passed=false, $_errors=[], $_db=null;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items=[]){
        $this->_errors = [];
        foreach ($items as $item => $rules){
            $item = Input::sanitize($item);
            $display = $rules['display'];
            foreach ($rules as $rule => $rule_value){
                $value = Input::sanitize(trim($source[$item]));
                if($rule === 'required' && empty($value)){
                    $this->addError(["{$display} is required", $item]);
                } else if (!empty($value)){
                    switch ($rule){
                        case 'min':
                            if(strlen($value) < $rule_value){
                                $this->addError(["{$display} must be a minimum of {$rule_value} characters.", $item]);
                            }
                            break;
                        case 'max':
                            if(strlen($value) > $rule_value){
                                $this->addError(["{$display} must be a maximum of {$rule_value} characters.", $item]);
                            }
                            break;
                    }
                }
            }
        }
        if(empty($this->_errors)){
            $this->_passed = true;
        }
        return $this;
    }

    public function addError($error){
        $this->_errors[] = $error;
        if(empty($this->_errors)){
            $this->_passed = true;
        } else {
            $this->_passed = false;
        }
    }

    public function errors(){
        return $this->_errors;
    }

    public function passed(){
        return $this->_passed;
    }

    public function displayErrors(){
        $html = '<ul class="text-danger">';
        foreach ($this->_errors as $error){
            $html .= '<li class="text-danger">' . $error[0] . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}
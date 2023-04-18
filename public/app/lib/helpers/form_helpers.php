<?php
function inputBlock($type, $label, $name, $value='', $inputAttrs=[] , $divAttrs=[]){
    $divString = stringifyAttrs($divAttrs);
    $inputString = stringifyAttrs($inputAttrs);
    $html = '<div>' . $divString . '>';
    $html .= '<label for="' . $name . '">' . $label . '</label>';
    $html .= '<input type="' . $type .  '" id=" ' . $name . '" name="' . $name . '" value="' . $value . '" ' . $inputString . ' />';
    $html .= '</div>';

    return $html;
}

function submitTag($buttonText, $inputAttrs=[]){
    $inputString = stringifyAttrs($inputAttrs);
    $html = '<input type="submit" value="' . $buttonText . '" ' . $inputString .  ' />';
}



function stringifyAttrs($attrs){
    $string = '';
    foreach ($attrs as $key => $value){
        $string .= ' '. $key . '="'.$value.'"';
    }
    return $string;
}


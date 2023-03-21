<?php
class form{
    
function input($size, $name, $label,$type, $placeholder) {
    $un =  '<div class="md- '.$size.'">
            <div class="mb-3">';
    $deux = '';
    $trois =  '<input type="'.$type.'" name="'.$name.'"class="form-control" id="'.$name.'" placeholder="'.$placeholder.'">
        </div>
        </div>';

        if($type != 'submit') {
            $deux = '<label for="'.$name.'" class="form-label">'.$label.'</label>';
        }
        return $un.$deux.$trois;
    }

    function verif ($name, $min, $max, $message, $array){
        if(strlen ($name) < $min || strlen ($name) );
    }
}
return form{};
?>
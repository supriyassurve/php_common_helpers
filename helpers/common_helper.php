<?php  
  
  /** 
  * Creates a HTML select with options and selected option.
  * @param string $name <p>Name for select node</p>
  * @param array $options <p>Array for generating options</p>
  * @param string $selected <p>Selected value or blank string. Can be string or integer.</p> 
  * @param string $css_class <p>Css class name(s) as a string</p>
  * <p>
  * This will append the given name and class name to select tag.
  * Selected value will be selected in options by comapering the $selected.
  * Options send to the helper function needs to be array
  * For example:
  * 1. array(1, 2, 3, 4, 5, 6, 7);
  * Or
  * 2. array(array(0,"0 Hours"), array(1,"1 Hour"), array(2,"2 Hours"), array(3, "3 Hours"), array(4, "4 Hours"));
  * </p>
  */
  function select_tag($name, $options, $selected="", $css_class="", $onchange=""){
    $select_tag = '<select class="' . $css_class . '" name="'.$name;
    if($onchange!=""){
      $select_tag .= '" onchange="'.$onchange;
    }
    $select_tag .= '">';
    $select_options = "";

    foreach($options as $a) {
      if(is_array($a)){
        $ky = $a[0];
        $val = $a[1];
      }else{
        $ky = $a;
        $val = $a;
      }
      $select_options .= '<option value="' . $ky . '"';
      if($selected==$ky){ 
        $select_options .= ' selected="selected"';
      }
      $select_options .= '>' . $val . '</option>';
    }

    $select_tag .= $select_options . '</select>';
    
    return $select_tag;
  }  

?>
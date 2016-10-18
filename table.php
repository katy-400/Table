<?php
    function build_table($array){ // start table
    
      $html = '<table border = "3" >'; // header row

      $html .= '<tr>';
      
      foreach($array[0] as $key=>$value){
              $html .= '<th>' . $key . '</th>';
      }
      
      $html .= '</tr>'; // data rows
      
      foreach( $array as $key=>$value){
          $html .= '<tr>';
          foreach($value as $key2=>$value2){
              $html .= '<td>' . $value2 . '</td>';
          }
          
          $html .= '</tr>';
      }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$array = array(
      array('first'=>'Wyatt', 'last'=>'Peters', 'email'=>'wyatt@poop.org', 'company'=>              'The Poop Group Inc'),
      array('first'=>'Hugh', 'last'=>'Mungus', 'email'=>'hugh@aol.aol', 'company'=>                'NJIT'),
      array('first'=>'Brian', 'last'=>'Barbarian', 'email'=>'brifi@gmail.org', 'company'=>        'BroCoders')
);

echo build_table($array);
?>
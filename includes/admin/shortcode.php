<?php

function second_scone_sc(){
  return "Hello world!";
}

function second_sctwo_sc($atts, $content=null){

  $a = shortcode_atts(
    array( "first" => '<span style="color:green; ">not given</span>',
    "last" => '<span style="color:green; ">not given</span>',
    ),
    $atts
  );
  return "first name : " . $a["first"]."<br> last name : ". $a["last"];
}


function second_scthree_sc($atts, $content=''){
  return '<span>' .$content .'</span>';
}



function second_scfour_sc(){
  $createHtml = file_get_contents('contact-template.php',true);
  return $createHtml;
}
function second_scfive_sc($atts, $content=""){

  return do_shortcode($content);
}


?>

<?php

function test_admin_menu(){
  add_menu_page(
    'page tile',
    'menu title',
    'edit_themes',
    'menu_slug',
    'test_menu_content'
  );
}
?>
<?php
function test_menu_content(){
?>
<div class="wrap">
  <h1>hello new admin</h1>
</div>
<?php
}







 ?>

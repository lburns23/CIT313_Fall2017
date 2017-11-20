<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
class View {
   public function load( $folder, $file_name, $data = null )
   {
      if( is_array($data) ) {
         extract($data);
      }

       $u = new Users();

      include 'views/'.$folder.'/'. $file_name . '.php';
   }
}




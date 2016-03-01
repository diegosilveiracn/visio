<?php

class UploadComponent extends Component {

    public $name = "Upload";

    function copyUploadedImage($file){
      $path = WWW_ROOT . 'img/consultas/';

      $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
      $arr_ext = array('jpg', 'jpeg', 'gif','png');

      if(file_exists($path . $file['name'])){
        return false;
      }else if (in_array($ext, $arr_ext)) {
          move_uploaded_file($file['tmp_name'], $path . $file['name']);
          return true;
      }else{
          return false;
      }
    }

    function deleteUploadedImage($file_name){
       $path = WWW_ROOT . 'img/consultas/';

       if(file_exists($path . $file_name)){
          unlink($path . $file_name);
       }
    }
}

?>

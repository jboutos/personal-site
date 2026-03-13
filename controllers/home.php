<?php
   function homePage() {

      $data = getJsonData('home');

      return view('home', [
         'data' => $data
      ]);
   }
?>
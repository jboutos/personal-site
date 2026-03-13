<?php
   function homePage() {

      $data = getJsonData('pages/home');

      return view('home', [
         'data' => $data
      ]);
   }
?>
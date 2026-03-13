<?php
   function detailsPage() {

      $project_id = $_GET['project'] ?? '';
      $detail = getJsonData('projects/' . $project_id);

      return view('details', [
         'detail' => $detail
      ]);
   }
?>
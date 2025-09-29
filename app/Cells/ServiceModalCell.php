<?php

namespace App\Cells;

class ServiceModalCell {
  public function __construct()
  {
    // No parameters required
  }

  public function render($id, $title, $section1Content, $section2Content, $schedule = null, $section1Title = 'Requirements', $section2Title = 'Notes')
  {
    return view('cells/service_modal', [
      'id' => $id,
      'title' => $title,
      'section1Content' => $section1Content,
      'section2Content' => $section2Content,
      'schedule' => $schedule,
      'section1Title' => $section1Title,
      'section2Title' => $section2Title
    ]);
  }
}

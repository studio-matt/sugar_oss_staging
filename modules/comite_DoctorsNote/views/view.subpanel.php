<?php
require_once('include/MVC/View/views/view.detail.php');

class comite_DoctorsNoteViewSubpanel extends ViewDetail {

  function comite_DoctorsNoteViewSubpanel(){
  }

  public function preDisplay() {
  }

  /**
    * @see SugarView::display()
    */
  public function display()
  {
    
    # Contact Info
//    $_REQUEST['module'] = 'Contact';
//    include('include/SubPanel/SubPanelViewer.php');
    
    # Family History
//    $_REQUEST['module'] = 'Contact';
//    include('include/SubPanel/SubPanelViewer.php');
    
    # Personal Health History
//    $_REQUEST['module'] = 'comite_PersonalHealthHistory';
//    include('include/SubPanel/SubPanelViewer.php');
    
    # Lifestyle Tab
    $_REQUEST['module'] = 'comite_LifeStyle';
    include('include/SubPanel/SubPanelViewer.php');
    
    # Nutrition & Exercise
//    $_REQUEST['module'] = 'comite_NutritionExercise';
//    include('include/SubPanel/SubPanelViewer.php');
  }
}
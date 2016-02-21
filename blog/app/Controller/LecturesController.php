<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
 
class LecturesController extends AppController {
 
public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('lectures', $this->Lecture->find('all'));
    }
    public function view($id = null){
      if(!$id) {
        throw new NotFoundException(__('Invalid post'));
      }
      $lecture = $this->Lecture->findById($id);
      if (!$lecture){
        throw new NotFoundException(__('Invaid post'));
      }
      $this->set('post',$lecture);
    }

}

?>
<?php
class ContactController extends Controller {
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->view->setLayout('default');
        $this->load_model('Contacts');
    }

    public function indexAction(){
        $contacts = $this->ContactsModel->findAllByUserId(currentUser()->id, ['order'=> 'fname, lname']);
        $this->view->contacts = $contacts;
        $this->view->render('contacts/index');
    }

    public function addAction(){
        $this->view->render('contacts/add');
    }

    public function detailAction($id){
        $contact = $this->ContactsModel->findByIdAndUserId((int)$id, currentUser()->id);
        if(!$contact){
            Router::redirect('contacts');
        }
        $this->view->contact = $contact;
        $this->view->render('contacts/detail');
    }
}
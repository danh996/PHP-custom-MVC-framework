<?php
class Home extends Controller{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
    }

    public function indexAction(){
        $db = DB::getInstance();

        $contactQ = $db->get_columns('contacts');
        dnd($contactQ);

        $sql = "SELECT * FROM contacts";
        $contactsQ = $db->query($sql);
        $this->view->render('home/index');
    }


}
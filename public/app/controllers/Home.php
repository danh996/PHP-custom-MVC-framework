<?php
class Home extends Controller{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
    }

    public function indexAction(){
        $db = DB::getInstance();

        $contact = $db->findFirst('contacts', [
            'conditions' => [
                'fname'=>'?'
            ],
            'bind'=> ['danh']
        ]);
        dnd($contact);

        $sql = "SELECT * FROM contacts";
        $contactsQ = $db->query($sql);
        $this->view->render('home/index');
    }


}
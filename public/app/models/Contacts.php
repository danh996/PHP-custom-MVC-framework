<?php
class Contacts extends Model{
    public function __construct($table)
    {
        $table = 'contacts';
        parent::__construct($table);
    }

    public function findAllUserById($user_id, $params=[]){
        $conditions = [
            'conditions' => 'user_id = ?',
            'bind' => [$user_id]
        ];

        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
    }

    function displayName(){
        return $this->fname . ' ' . $this->lname;
    }

    public function findByIdAndUserId($contact_id, $user_id, $params=[]){
        $conditions = [
            'conditions' => 'id = ? AND user_id = ?',
            'bind' => [$contact_id, $user_id]
        ];
        $conditions = array_merge($conditions,$params);
        return $this->findFirst($conditions);
    }
}
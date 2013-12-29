<?php

class Oferta extends AppModel {
    public $validate = array(
    'title' => array(
        'rule' => 'notEmpty'
    ),
    'body' => array(
        'rule' => 'notEmpty'
    )
    );
    
    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
    }
    
}
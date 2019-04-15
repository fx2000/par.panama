<?php
    namespace App\Model\Entity;

    use Cake\ORM\Entity;
    use Cake\Auth\DefaultPasswordHasher;
    use Cake\ORM\TableRegistry;

    class Remittance extends Entity {
        protected $_accesible = [
            '*' => true,
            'id' => false,
            'photo_dir' => false
        ];
    }
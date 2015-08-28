<?php

    class Store
    {
        private $id;
        private $name;

        function __construct($id = null, $name)
        {
            $this->name = $name;
            $this->id = $id;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function getId()
        {
            return $this->id;
        }

    }


?>

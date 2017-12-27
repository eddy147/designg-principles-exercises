<?php

namespace SingleResponsibility;

class Treatment
{
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Treatment
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


}
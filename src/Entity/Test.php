<?php
namespace Entity;

use JMS\Serializer\Annotation as JMS;

class Test
{
    /**
     * @JMS\Expose
     * @JMS\SerializedName(value="ID")
     */
    private $id;

    /**
     * @JMS\Expose
     */
    private $name;

    /**
     * @JMS\Expose
     */
    private $markAsRead;

    public function getMarkAsRead()
    {
        return $this->markAsRead;
    }

    public function setMarkAsRead($markAsRead)
    {
        $this->markAsRead = $markAsRead;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}

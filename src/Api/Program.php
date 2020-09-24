<?php


namespace InCommAlder\Api;
use InCommAlder\Common\ResourceModel;


/**
 * @property integer $id
 * @property string $name
 * @property Link[] $links
 *
 * @method listFulfillment()
 * @method listCatalogs()
 */
class Program extends ResourceModel
{
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \InCommAlder\Api\Link[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param \InCommAlder\Api\Link[] $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }
    
}
<?php

namespace ReferenceIntegrity\Fixture\Document\OneNullify;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document(collection="articles")
 */
class Article
{
    /**
     * @ODM\Id
     */
    private $id;

    /**
     * @ODM\Field(type="string")
     */
    private $title;

    /**
     * @ODM\ReferenceOne(targetDocument="ReferenceIntegrity\Fixture\Document\OneNullify\Type", inversedBy="articles")
     *
     * @var Type
     */
    private $type;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setType(Type $type)
    {
        $this->type = $type;
    }

    /**
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }
}
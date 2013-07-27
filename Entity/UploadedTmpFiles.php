<?php

namespace PunkAve\FileUploaderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UploadedFiles
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UploadedTmpFiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=TRUE)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer", nullable=TRUE)
     */
    private $size;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="success", type="boolean", nullable=TRUE, options={"default":TRUE})
     */
    private $success;
    
    public function __construct() {
        $this->setSuccess(TRUE);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return UploadedFiles
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return UploadedFiles
     */
    public function setSize($size)
    {
        $this->size = $size;
    
        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }


    /**
     * Set success
     *
     * @param boolean $success
     * @return UploadedTmpFiles
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    
        return $this;
    }

    /**
     * Get success
     *
     * @return boolean 
     */
    public function getSuccess()
    {
        return $this->success;
    }
}
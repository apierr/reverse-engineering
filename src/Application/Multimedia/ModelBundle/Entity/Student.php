<?php

namespace Application\Multimedia\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 */
class Student
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Multimedia\ModelBundle\Entity\Course
     */
    private $idCourse;


    /**
     * Set name
     *
     * @param string $name
     * @return Student
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Set idCourse
     *
     * @param \Application\Multimedia\ModelBundle\Entity\Course $idCourse
     * @return Student
     */
    public function setIdCourse(\Application\Multimedia\ModelBundle\Entity\Course $idCourse = null)
    {
        $this->idCourse = $idCourse;

        return $this;
    }

    /**
     * Get idCourse
     *
     * @return \Application\Multimedia\ModelBundle\Entity\Course 
     */
    public function getIdCourse()
    {
        return $this->idCourse;
    }
}

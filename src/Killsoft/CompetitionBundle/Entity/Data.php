<?php

namespace Killsoft\CompetitionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Data
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Data
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
     * @Assert\NotBlank()
     * @ORM\Column(name="male", type="string")
     */
    private $male;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="female", type="string")
     */
    private $female;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date1", type="date")
     */
    private $date1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date2", type="date")
     */
    private $date2;


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
     * Set male
     *
     * @param string $male
     * @return Data
     */
    public function setMale($male)
    {
        $this->male = $male;

        return $this;
    }

    /**
     * Get male_name
     *
     * @return string 
     */
    public function getMale()
    {
        return $this->male;
    }

    /**
     * Set female
     *
     * @param string $female
     * @return Data
     */
    public function setFemale($female)
    {
        $this->female = $female;

        return $this;
    }

    /**
     * Get female
     *
     * @return string 
     */
    public function getFemale()
    {
        return $this->female;
    }

    /**
     * Set date1
     *
     * @param \DateTime $date1
     * @return Data
     */
    public function setDate1($date1)
    {
        $this->date1 = $date1;

        return $this;
    }

    /**
     * Get date1
     *
     * @return \DateTime 
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Set date2
     *
     * @param \DateTime $date2
     * @return Data
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;

        return $this;
    }

    /**
     * Get date2
     *
     * @return \DateTime 
     */
    public function getDate2()
    {
        return $this->date2;
    }
}


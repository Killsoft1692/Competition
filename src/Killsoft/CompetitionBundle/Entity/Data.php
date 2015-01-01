<?php

namespace Killsoft\CompetitionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     *
     * @ORM\Column(name="male_name", type="string")
     */
    private $male_name;

    /**
     * @var string
     *
     * @ORM\Column(name="female_name", type="string")
     */
    private $female_name;

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
     * Set male_name
     *
     * @param string $maleName
     * @return Data
     */
    public function setMaleName($maleName)
    {
        $this->male_name = $maleName;

        return $this;
    }

    /**
     * Get male_name
     *
     * @return string 
     */
    public function getMaleName()
    {
        return $this->male_name;
    }

    /**
     * Set female_name
     *
     * @param string $femaleName
     * @return Data
     */
    public function setFemaleName($femaleName)
    {
        $this->female_name = $femaleName;

        return $this;
    }

    /**
     * Get female_name
     *
     * @return string 
     */
    public function getFemaleName()
    {
        return $this->female_name;
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

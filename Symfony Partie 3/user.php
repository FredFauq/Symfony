<?php

namespace E2N\candidateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * user
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="E2N\candidateBundle\Repository\userRepository")
 */
class user {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="lastname", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $lastname;

    /**
     * @var string
     * @ORM\Column(name="firstname", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="/[a-zA-Z]/", match=true, message="Veuillez entrer un prénom valide")
     */
    private $firstname;

    /**
     * @var \DateTime
     * @ORM\Column(name="createDate", type="datetime")
     * @Assert\NotBlank()
     * @Assert\DateTime()
     */
    private $createDate;

    /**
     * @var string
     * @ORM\Column(name="mail", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     * 
     */
    private $mail;

    /**
     * @var string
     * @ORM\Column(name="motivation", type="text")
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="/[a-zA-Z]/", match=true, message="C'est ça tes motivations ? Pfffff")
     * 
     */
    private $motivation;

    /**
     * @var int
     * @ORM\Column(name="palme", type="integer")
     * @Assert\NotBlank()
     * @Assert\Type(type = "integer", message="Vous devez entrer un nombre")
     * 
     */
    private $palme;

    public function __construct()
    {
        $this->createDate = NEW \DateTime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return user
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return user
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return user
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return user
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set motivation
     *
     * @param string $motivation
     *
     * @return user
     */
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;

        return $this;
    }

    /**
     * Get motivation
     *
     * @return string
     */
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * Set palme
     *
     * @param integer $palme
     *
     * @return user
     */
    public function setPalme($palme)
    {
        $this->palme = $palme;

        return $this;
    }

    /**
     * Get palme
     *
     * @return int
     */
    public function getPalme()
    {
        return $this->palme;
    }

}

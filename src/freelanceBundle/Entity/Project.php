<?php

namespace freelanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
     /**
     * @ORM\Column(type="string")
     * 
     */
    private $title;
    
     /**
     * @ORM\Column(type="string")
     * 
     */
    private $description;
    
     /**
     * @ORM\Column(type="string")
     * 
     */
    private $category;
    
     /**
     * @ORM\Column(type="string")
     * @ORM\ManyToOne(targetEntity="Freelancer")
     * @ORM\JoinColumn(nullable=true)
     */
    private $freelancer;

    
     /**
     * @ORM\Column(type="string")
     * @ORM\ManyToOne(targetEntity="Jobowner")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jobowner;
    
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    function getCategory() {
        return $this->category;
    }

    function getFreelancer() {
        return $this->freelancer;
    }

    function getJobowner() {
        return $this->jobowner;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setCategory($category) {
        $this->category = $category;
    }

    function setFreelancer($freelancer) {
        $this->freelancer = $freelancer;
    }

    function setJobowner($jobowner) {
        $this->jobowner = $jobowner;
    }


}



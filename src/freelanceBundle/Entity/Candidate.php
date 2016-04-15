<?php

namespace freelanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Candidate
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
   /**
   * @ORM\OneToMany(targetEntity="Freelancer", mappedBy="candidate")
   */
    private $freelancer;

    /**
   * @ORM\OneToOne(targetEntity="Project", cascade={"persist"})
   */
    private $project;
    
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

    function getProject() {
        return $this->project;
    }

    function setProject($project) {
        $this->project = $project;
    }


}



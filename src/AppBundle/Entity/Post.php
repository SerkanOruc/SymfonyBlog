<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;
    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $postedAt;



    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }
    
    public function getPostedAt() {
        return $this->postedAt;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setPostedAt($postedAt) {
        return $this->postedAt = $postedAt;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }
}
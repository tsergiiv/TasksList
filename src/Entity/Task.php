<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity( repositoryClass = TaskRepository::class )
*/

class Task {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column( type = "integer" )
    */
    private $id;

    /**
    * @ORM\Column( type = "text", length = 150 )
    */
    private $task;

    /**
    * @ORM\Column( type = "integer" )
    */
    private $status;

    /**
    * @ORM\Column( type = "integer" )
    */
    private $adminEdit;

    /**
    * @ORM\Column( type = "text", length = 50 )
    */
    private $author;

    /**
    * @ORM\Column( type = "datetime" )
    */
    private $dateAdded;

    public function getId() {
        return $this->id;
    }

    public function getTask() {
        return $this->task;
    }

    public function setTask( $task ) {
        $this->task = $task;
    }

    public function getStatusName() {
        switch ( $this->status ) {
            case 0:
                echo "to do";
                break;
            case 1:
                echo "doing";
                break;
            case 2:
                return "done";
        }
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus( $status ) {
        $this->status = $status;
    }

    public function getAdminEdit() {
        return $this->adminEdit;
    }

    public function setAdminEdit( $adminEdit ) {
        $this->adminEdit = $adminEdit;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor( $author ) {
        $this->author = $author;
    }

    public function getDateAdded() {
        return $this->dateAdded;
    }

    public function setDateAdded( $dateAdded ) {
        $this->dateAdded = $dateAdded;
    }
}

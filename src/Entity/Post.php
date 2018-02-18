<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     *
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @var
     *
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @var
     *
     * @ORM\Column(type="string", length=255)
     */
    private $filename;


    // add your own fields
}

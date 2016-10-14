<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 07.10.16
 * Time: 09:46
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Post", mappedBy="createdBy")
     */
    private $posts;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
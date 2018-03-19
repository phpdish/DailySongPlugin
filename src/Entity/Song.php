<?php

namespace PHPDish\DailySongPlugin\Entity;

use Carbon\Carbon;
use PHPDish\Bundle\CoreBundle\Model\DateTimeTrait;
use PHPDish\Bundle\CoreBundle\Model\EnabledTrait;
use PHPDish\Bundle\CoreBundle\Model\IdentifiableTrait;
use PHPDish\DailySongPlugin\Model\SongInterface;

class Song implements SongInterface
{
    use IdentifiableTrait;
    use DateTimeTrait;
    use EnabledTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $srcId;

    /**
     * @var string
     */
    protected $src;

    public function __construct()
    {
        $this->createdAt = $this->updatedAt = Carbon::now();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSrcId()
    {
        return $this->srcId;
    }

    /**
     * {@inheritdoc}
     */
    public function setSrcId($srcId)
    {
        $this->srcId = $srcId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * {@inheritdoc}
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }
}
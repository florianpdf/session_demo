<?php

namespace SessionTestBundle\Entity;

/**
 * Page
 */
class Page
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $fieldUn;

    /**
     * @var string
     */
    private $fieldDeux;


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
     * Set fieldUn
     *
     * @param string $fieldUn
     *
     * @return Page
     */
    public function setFieldUn($fieldUn)
    {
        $this->fieldUn = $fieldUn;

        return $this;
    }

    /**
     * Get fieldUn
     *
     * @return string
     */
    public function getFieldUn()
    {
        return $this->fieldUn;
    }

    /**
     * Set fieldDeux
     *
     * @param string $fieldDeux
     *
     * @return Page
     */
    public function setFieldDeux($fieldDeux)
    {
        $this->fieldDeux = $fieldDeux;

        return $this;
    }

    /**
     * Get fieldDeux
     *
     * @return string
     */
    public function getFieldDeux()
    {
        return $this->fieldDeux;
    }
}


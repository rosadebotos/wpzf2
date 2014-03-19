<?php

namespace Cheetara\Entity;

interface CheatInterface
{
    /**
     * Get idcheat.
     *
     * @return int
     */
    public function getIdcheat();

    /**
     * Set idcheat.
     *
     * @param int $idcheat
     * @return CheatInterface
     */
    public function setIdcheat($idcheat);

    /**
     * Get name.
     *
     * @return string
     */
    public function getName();

    /**
     * Set name.
     *
     * @param string $name
     * @return CheatInterface
     */
    public function setName($name);

    /**
     * Get code.
     *
     * @return string
     */
    public function getCode();

    /**
     * Set code.
     *
     * @param string $code
     * @return CheatInterface
     */
    public function setCode($code);

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Set description.
     *
     * @param string $description
     * @return CheatInterface
     */
    public function setDescription($description);

    /**
     * Get filename.
     *
     * @return string filename
     */
    public function getFilename();

    /**
     * Set password.
     *
     * @param string $filename
     * @return CheatInterface
     */
    public function setFilename($filename);

    /**
     * Get categories_idcategory.
     *
     * @return int
     */
    public function getCategories_idcategory();

    /**
     * Set Categories_idcategory.
     *
     * @param int $Categories_idcategory
     * @return CheatInterface
     */
    public function setCategories_idcategory($categories_idcategory);

}

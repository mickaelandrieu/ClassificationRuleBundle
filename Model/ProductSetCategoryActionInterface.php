<?php

namespace PimEnterprise\Bundle\AutomaticClassificationBundle\Model;

use Akeneo\Bundle\RuleEngineBundle\Model\ActionInterface;

/**
 * Set action used in product rules.
 * An set action category is used to place a product in only one category.
 *
 * @author Damien Carcel (https://github.com/damien-carcel)
 */
interface ProductSetCategoryActionInterface extends ActionInterface
{
    const ACTION_TYPE = 'set_category';

    /**
     * @return string
     */
    public function getCategoryCode();

    /**
     * @param string $categoryCode
     *
     * @return ProductAddCategoryActionInterface
     */
    public function setCategoryCode($categoryCode);
}

<?php

declare(strict_types=1);

namespace Tests\Urbanara\CatalogPromotionPlugin\Behat\Element;

interface CatalogPromotionElementInterface
{
    /**
     * @return string
     */
    public function getCrossedOutPrice();

    /**
     * @return string
     */
    public function getNewPrice();
}

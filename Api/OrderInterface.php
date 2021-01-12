<?php

namespace EonInfosys\Customer\Api;

use EonInfosys\Customer\Api\Data\PointInterface;

interface OrderInterface
{
  /**
   * Find entities by customer ID
   * Accepts 'page' and 'show' GET params
   *
   * @param string $customerId
   * @return \Magento\Sales\Api\Data\OrderSearchResultInterface
   */
    public function getOrdertList($customerId);
}

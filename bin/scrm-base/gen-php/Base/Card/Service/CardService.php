<?php
/**
 * Autogenerated by Thrift Compiler (0.9.2)-v1.0.1
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 * THIS IS MODIFIED FOR YOUZAN, ANY PROBLEM PLS CONTACT lanhu(zhangyuanhao@qima-inc.com)
 * qingjiao(qingjiao@qima-inc.com) & xiao'er(shiyu@qima-inc.com)
 * @generated
 */

namespace Com\Youzan\Scrm\Base\Card\Service;

use Kdt\Iron\Nova\Foundation\TService;
use Thrift\Type\TType;


use Com\Youzan\Scrm\Base\Card\Interfaces\CardService as CardServiceInterface;
use Com\Youzan\Scrm\Base\Card\Servicespecification\CardService as CardServiceSpecification;

class CardService extends TService implements CardServiceInterface {

  protected function specificationProvider()
  {
    return new CardServiceSpecification();
  }

  /**
   * @return string
   */
  public function getCard()
  {
    return $this->apiCall(__FUNCTION__, func_get_args());
  }

}

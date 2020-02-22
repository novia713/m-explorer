<?php

namespace Leandro;

use Exception;

class Helpers
{

    public static function is_valid_uniqid($token){
      if (strlen($token) == 13){
        return true;
      }else{
        return false;
      }
    }

    public static function is_valid_address($address) {
      if (!preg_match('/^(0x)?[0-9a-f]{40}$/i',$address)) {
          // Check if it has the basic requirements of an address
          return false;
      } elseif (preg_match('/^(0x)?[0-9a-f]{40}$/',$address)) {
          // If it's all small caps, return true
          return true;
      }
    }
}

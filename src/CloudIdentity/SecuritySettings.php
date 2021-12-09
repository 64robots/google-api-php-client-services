<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudIdentity;

class SecuritySettings extends \Google\Model
{
  protected $memberRestrictionType = MemberRestriction::class;
  protected $memberRestrictionDataType = '';
  public $name;

  /**
   * @param MemberRestriction
   */
  public function setMemberRestriction(MemberRestriction $memberRestriction)
  {
    $this->memberRestriction = $memberRestriction;
  }
  /**
   * @return MemberRestriction
   */
  public function getMemberRestriction()
  {
    return $this->memberRestriction;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecuritySettings::class, 'Google_Service_CloudIdentity_SecuritySettings');
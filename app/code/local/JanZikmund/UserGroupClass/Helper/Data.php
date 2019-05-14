<?php
class JanZikmund_UserGroupClass_Helper_Data extends Mage_Core_Helper_Abstract{

	public function getBodyClass()
	{
		if(Mage::getSingleton('customer/session')->isLoggedIn()){
		      // Get group Id
		      $groupId = Mage::getSingleton('customer/session')->getCustomerGroupId();
		      $group = Mage::getModel('customer/group')->load($groupId);
		      return 'group-' . $group->getCode();
		} else {
			return 'group-not-logged-in';
		}
	}
}

<?php
namespace Scarbous\MrMobile\ViewHelpers\Client;



class AbstractClientViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractConditionViewHelper {


	function __construct() {
		if(!class_exists('Mobile_Detect')) {
			require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('mr_mobile') . 'Resources/Private/PHP/Mobile_Detect.php');
		}
		$this->MobileDetect = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Mobile_Detect');
	}

	/**
	 * @param bool $val
	 * 
	 * @return string
	 */
	public Function doCondition($val){
		if ($val) {			
			return $this->renderThenChild();
		} else {			
			return $this->renderElseChild();
		}
	}

}
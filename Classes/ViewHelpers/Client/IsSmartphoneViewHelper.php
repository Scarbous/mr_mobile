<?php
namespace Scarbous\MrMobile\ViewHelpers\Client;


class IsSmartphoneViewHelper extends \Scarbous\MrMobile\ViewHelpers\Client\AbstractClientViewHelper {

	/**
	 * Render method
	 *
	 * @return string
	 */
	public function render() {
		return $this->doCondition($this->MobileDetect->isMobile() && !$this->MobileDetect->isTablet());
	}
}

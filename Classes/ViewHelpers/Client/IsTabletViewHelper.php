<?php
namespace Scarbous\MrMobile\ViewHelpers\Client;


class IsTabletViewHelper extends \Scarbous\MrMobile\ViewHelpers\Client\AbstractClientViewHelper {

	/**
	 * Render method
	 *
	 * @return string
	 */
	public function render() {
		return $this->doCondition($this->MobileDetect->isTablet());
	}
}

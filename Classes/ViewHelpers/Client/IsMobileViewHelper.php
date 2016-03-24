<?php
namespace Scarbous\MrMobile\ViewHelpers\Client;


class IsMobileViewHelper extends \Scarbous\MrMobile\ViewHelpers\Client\AbstractClientViewHelper {

	/**
	 * Render method
	 *
	 * @return string
	 */
	public function render() {
		return $this->doCondition($this->MobileDetect->isMobile());
	}
}

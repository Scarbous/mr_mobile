<?php
namespace Scarbous\MrMobile\Hooks\TYPO3\CMS\Frontend\Page;

/**
 * Class PageRepository
 * @author Sascha Heilmeier <s.heilmeier@misterknister.com>
 */
class PageRepository extends \TYPO3\CMS\Frontend\Page\PageRepository
{
	public function enableFields($table, $show_hidden = -1, $ignore_array = [], $noVersionPreview = false)
	{
		return '';
	}

	public function addEnableColumns($table, $show_hidden, $ignore_array, $ctrl)
	{
		return ' AND 1=0';
	}
}

<?php

namespace Phile\ServiceLocator;

/**
 * Interface TemplateInterface
 *
 * @package Phile\ServiceLocator
 */
interface TemplateInterface {
	/**
	 * render the template
	 *
	 * @return mixed
	 */
	public function render();

	/**
	 * set current page
	 *
	 * @param \Phile\Model\Page $page
	 *
	 * @return mixed
	 */
	public function setCurrentPage(\Phile\Model\Page $page);
}

<?php


namespace Barryvdh\TranslationManager\Event;


class TranslationsWasPublishedEvent
{
	/**
	 * @var string
	 */
	public $group;

	/**
	 * TranslationsWasPublishedEvent constructor.
	 * @param string $group
	 */
	public function __construct($group)
	{
		$this->group = $group;
	}
}
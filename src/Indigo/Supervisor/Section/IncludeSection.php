<?php

namespace Indigo\Supervisor\Section;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IncludeSection extends AbstractSection
{
	protected $name = 'include';

	/**
	 * {@inheritdoc}
	 */
	protected function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setRequired(array('files'));
	}
}
<?php

/**
 * This file is part of the Nextras\Orm library.
 * @license    MIT
 * @link       https://github.com/nextras/orm
 */

namespace NextrasTests\Orm;

use Nextras\Orm\Repository\Repository;


/**
 * @method Thread|Comment getById($id)
 */
class ContentsRepository extends Repository
{

	public static function getEntityClassNames()
	{
		return [
			'NextrasTests\Orm\Comment',
			'NextrasTests\Orm\Thread',
		];
	}


	public function getEntityClassName(array $data)
	{
		return $data['type'] === 'comment'
			? 'NextrasTests\Orm\Comment'
			: 'NextrasTests\Orm\Thread';
	}

}

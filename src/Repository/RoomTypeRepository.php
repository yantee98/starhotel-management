<?php

namespace Romi\Repository;

use Doctrine\ORM\EntityRepository;

class RoomTypeRepository extends EntityRepository {

	public function anyMethodToFindData() {
		return 'data from repository';
	}

}

<?php

namespace Romi\Repository;

use Doctrine\ORM\EntityRepository;

class PaymentRepository extends EntityRepository {

    public function anyMethodToFindData() {
		return 'data from repository';
	}

}

<?php
namespace Romi\Repository;

use Doctrine\ORM\EntityRepository;

class BookingRepository extends EntityRepository{

    public function anyMethodToFindData(){
        return 'data from repository';
    }
    
}
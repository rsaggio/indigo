<?php

namespace AppBundle\Repository;

/**
 * ProcessoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProcessoRepository extends \Doctrine\ORM\EntityRepository
{
	public function searchProcess($name) {
		$em =  $this->getEntityManager();
		$query = $em->createQuery('select p from AppBundle:Processo p where p.nome like :nome');
		$query->setParameter("nome","%$name%");

		return $query->getResult();
	}
}

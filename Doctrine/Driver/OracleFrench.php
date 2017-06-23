<?php

namespace Wizad\DoctrineOci8FrenchDriver\Doctrine\Driver;

use Doctrine\DBAL\Driver\OCI8\Driver;

class OracleFrench extends Driver
{
    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new OracleFrenchPlatform();
    }
}
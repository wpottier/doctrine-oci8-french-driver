<?php

namespace Wizad\DoctrineOci8FrenchDriver\Doctrine\Driver;

use Doctrine\DBAL\Platforms\OraclePlatform;

class OracleFrenchPlatform extends OraclePlatform
{
    /**
     * {@inheritDoc}
     */
    public function getDateTimeTzFormatString()
    {
        return 'd/m/Y H:i:sP';
    }
    
    /**
     * {@inheritDoc}
     */
    public function getDateFormatString()
    {
        return 'd/m/Y 00:00:00';
    }
    
    /**
     * {@inheritDoc}
     */
    public function getDateTimeFormatString()
    {
        return 'd/m/Y H:i:s';
    }
    
    /**
     * {@inheritDoc}
     */
    public function getTimeFormatString()
    {
        return '01/01/1900 H:i:s';
    }
}

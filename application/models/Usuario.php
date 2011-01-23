<?php

/**
 * Usuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Kromatick
 * @subpackage Intermodels
 * @author     Neozeratul <neozeratul@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Usuario extends BaseUsuario
{
    public static function findUsuario()
    {
        return Doctrine_Core::getTable('Usuario')
                ->findOneByStatus(true);
    }
}
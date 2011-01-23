<?php

/**
 * BasePhoto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $descripcion
 * @property string $photo_id
 * @property string $original
 * @property string $thumbnail_1
 * @property string $thumbnail_2
 * @property string $thumbnail_3
 * @property Doctrine_Collection $Modelos
 * @property Doctrine_Collection $Eventos
 * @property Doctrine_Collection $Galerias
 * 
 * @package    Kromatick
 * @subpackage Intermodels
 * @author     Neozeratul <neozeratul@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePhoto extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('photos');
        $this->hasColumn('descripcion', 'string', 60, array(
             'type' => 'string',
             'length' => '60',
             ));
        $this->hasColumn('photo_id', 'string', 20, array(
             'type' => 'string',
             'length' => '20',
             ));
        $this->hasColumn('original', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('thumbnail_1', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('thumbnail_2', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('thumbnail_3', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));

        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Modelo as Modelos', array(
             'refClass' => 'ModeloPhoto',
             'local' => 'photo_id',
             'foreign' => 'modelo_id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Evento as Eventos', array(
             'refClass' => 'EventoPhoto',
             'local' => 'photo_id',
             'foreign' => 'evento_id'));

        $this->hasMany('Galeria as Galerias', array(
             'refClass' => 'GaleriaPhoto',
             'local' => 'photo_id',
             'foreign' => 'galeria_id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
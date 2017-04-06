<?php

use FastD\Model\Migration;
use Phinx\Db\Table;

class Buckets extends Migration
{
    /**
     * @return Table
     */
    public function setUp()
    {
        $table = $this->table('buckets');

        $table
            ->addColumn('title', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime')
        ;

        return $table;
    }
    
    /**
     * The table preinstall dataset.
     *
     * @return mixed
     */
    public function dataSet(Table $table)
    {
        
    }
}
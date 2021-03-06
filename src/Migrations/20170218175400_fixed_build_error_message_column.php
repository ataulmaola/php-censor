<?php

use Phinx\Migration\AbstractMigration;

class FixedBuildErrorMessageColumn extends AbstractMigration
{
    public function up()
    {
        $this
            ->table('build_error')
            ->changeColumn('message', 'text')
            ->save();
    }

    public function down()
    {
        $this
            ->table('build_error')
            ->changeColumn('message', 'string', ['limit' => 250])
            ->save();
    }
}

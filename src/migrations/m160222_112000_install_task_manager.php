<?php

use yii\db\Migration;

class m160222_112000_install_task_manager extends Migration
{
    public function up()
    {
        $this->db->createCommand(\vm\cron\DbHelper::tableTasksSql())->execute();
        $this->db->createCommand(\vm\cron\DbHelper::tableTaskRunsSql())->execute();
    }

    public function down()
    {
        $this->dropTable('tasks');
        $this->dropTable('task_runs');
    }
}
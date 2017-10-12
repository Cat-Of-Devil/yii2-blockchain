<?php

use yii\db\Migration;

/**
 * Handles the creation of table `block`.
 */
class m171012_174605_create_block_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('block', [
            'id' => $this->primaryKey()->notNull()->unsigned(),
            'timestamp' => $this->timestamp()->notNull()->comment('Время'),
            'proof' => $this->integer()->notNull()->unsigned()->comment('Доказательство'),
            'previous_hash' => $this->string(255)->notNull()->comment('Хеш предыдущего блока'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('block');
    }
}

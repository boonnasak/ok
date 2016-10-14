<?php

use yii\db\Migration;

/**
 * Handles the creation for table `post`.
 */
class m161014_041255_create_post_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('post');
    }

}

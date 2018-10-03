<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public $autoId = false;

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('users')
        ->addColumn('id', 'uuid')
        ->addColumn('email', 'string')
        ->addColumn('password', 'string')
        ->addColumn('created', 'datetime', ['null' => true])
        ->addColumn('modified', 'datetime', ['null' => true])
        ->addPrimaryKey(['id'])
        ->create();

        $this->table('bookmarks')
        ->addColumn('id', 'uuid')
        ->addColumn('user_id', 'uuid')
        ->addColumn('title', 'string', ['limit' => 50])
        ->addColumn('description', 'text')
        ->addColumn('url', 'text')
        ->addColumn('created', 'datetime', ['null' => true])
        ->addColumn('modified', 'datetime', ['null' => true])
        ->addPrimaryKey(['id'])
        ->addForeignKey('user_id', 'users', 'id', ['delete'=> 'CASCADE', 'update'=> 'NO_ACTION', 'constraint' => 'user_key'])
        ->create();

        $this->table('tags')
        ->addColumn('id', 'uuid')
        ->addColumn('title', 'string')
        ->addColumn('created', 'datetime', ['null' => true])
        ->addColumn('modified', 'datetime', ['null' => true])
        ->addPrimaryKey(['id'])
        ->addIndex(['title'], ['unique' => true, 'name' => 'title_index'])
        ->create();

        $this->table('bookmarks_tags')
        ->addColumn('id', 'uuid')
        ->addColumn('bookmark_id', 'uuid')
        ->addColumn('tag_id', 'uuid')
        ->addColumn('created', 'datetime', ['null' => true])
        ->addColumn('modified', 'datetime', ['null' => true])
        ->addPrimaryKey(['id'])
        ->addForeignKey('tag_id', 'tags', 'id', ['delete'=> 'CASCADE', 'update'=> 'NO_ACTION', 'constraint' => 'tag_key'])
        ->addForeignKey('bookmark_id', 'bookmarks', 'id', ['delete'=> 'CASCADE', 'update'=> 'NO_ACTION', 'constraint' => 'bookmark_key'])
        ->create();
    }
}

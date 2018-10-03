<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookmarksTagsFixture
 *
 */
class BookmarksTagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'bookmark_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'tag_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'tag_key' => ['type' => 'index', 'columns' => ['tag_id'], 'length' => []],
            'bookmark_key' => ['type' => 'index', 'columns' => ['bookmark_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'bookmark_key' => ['type' => 'foreign', 'columns' => ['bookmark_id'], 'references' => ['bookmarks', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'tag_key' => ['type' => 'foreign', 'columns' => ['tag_id'], 'references' => ['tags', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 'c8ee2c93-87a3-46bf-af5f-fc92874b5e00',
                'bookmark_id' => '5c50f879-be6d-45a0-b543-4eafc7d0c8d4',
                'tag_id' => '6b13eaa2-0675-4c9d-ad14-7a1d9bd47de9',
                'created' => '2018-10-03 21:54:13',
                'modified' => '2018-10-03 21:54:13'
            ],
        ];
        parent::init();
    }
}

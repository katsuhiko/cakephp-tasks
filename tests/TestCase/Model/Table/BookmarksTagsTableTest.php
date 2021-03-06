<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookmarksTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookmarksTagsTable Test Case
 */
class BookmarksTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BookmarksTagsTable
     */
    public $BookmarksTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bookmarks_tags',
        'app.bookmarks',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BookmarksTags') ? [] : ['className' => BookmarksTagsTable::class];
        $this->BookmarksTags = TableRegistry::getTableLocator()->get('BookmarksTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BookmarksTags);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

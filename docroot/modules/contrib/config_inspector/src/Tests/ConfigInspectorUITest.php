<?php

namespace Drupal\config_inspector\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * User interface tests for configuration inspector.
 *
 * @group config_inspector
 */
class ConfigInspectorUITest extends WebTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
  public static $modules = array('block', 'config_inspector');

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
    $this->drupalPlaceBlock('local_tasks_block');

    $permissions = array(
      'inspect configuration',
    );
    // Create and login user.
    $admin_user = $this->drupalCreateUser($permissions);
    $this->drupalLogin($admin_user);
  }

  /**
   * Tests the listing page for inspecting configuration.
   */
  public function testConfigInspectorListUI() {
    $this->drupalGet('admin/config/development/configuration/inspect');
    $this->assertRaw('user.role.anonymous');
    foreach (array('list', 'tree', 'form', 'raw') as $type) {
      $this->assertLinkByHref('admin/config/development/configuration/inspect/user.role.anonymous/' . $type);
    }

    foreach (array('list', 'tree', 'form', 'raw') as $type) {
      $this->drupalGet('admin/config/development/configuration/inspect/user.role.anonymous/' . $type);
      $this->assertText('Label');
      // Assert this as raw text, so we can find even as form default value.
      $this->assertRaw('Anonymous user');

      // Make sure the tabs are present.
      $this->assertLink(t('List'));
      $this->assertLink(t('Tree'));
      $this->assertLink(t('Form'));
      $this->assertLink(t('Raw data'));
    }
  }

}

<?php

namespace Drupal\site_module_test\Controller;
use Drupal\Core\Controller\ControllerBase;

class HelloWorldPage extends ControllerBase {

  public function hiMethod() {

    return [
      'my_element' => [
        '#markup' => '<p>Hello World!!</p>',
      ]
    ];
  }
}

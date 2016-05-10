<?php

namespace Drupal\hello_world\Controller;

class HelloWorldController {
  public function hello() {
    return array(
      '#title' => t('Hello world!'),
      '#markup' => t('This is markup content.'),
    );
  }
}

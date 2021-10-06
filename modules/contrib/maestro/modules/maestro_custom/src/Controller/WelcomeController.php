<?php
namespace Drupal\maestro_custom\Controller;
class WelcomeController {
  public function welcome() {
    return array(
      '#markup' => 'Welcome to our Website. This is a test for Maestro custom module'
    );
  }
}
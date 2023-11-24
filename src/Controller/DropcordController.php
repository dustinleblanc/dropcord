<?php

namespace Drupal\dropcord\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Dropcord routes.
 */
class DropcordController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}

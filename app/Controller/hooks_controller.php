<?php
/**
 * Common web hooks for CakePHP app deployments.
 */
class HooksController extends AppController {

	var $uses = array();

/**
 * Action to call when a deployment is completed.
 *
 * Provided key is checked using HooksController::__check_key
 */
	function completed_deployment($key = NULL) {
		$this->__check_key($key);
		
		// ceeram's ClearCache plugin is available here:
		// https://github.com/ceeram/clear_cache
		App::import('Libs', 'ClearCache.ClearCache');
		$ClearCache = new ClearCache();
		
		// Remove the models and persistent caches, to prevent DB changes
		// from causing any trouble.
		$ClearCache->files('models', 'persistent');
		
		exit;
	}

/**
 * Check the provided key against the hookKey set in /app/config/config.php.
 */
	function __check_key($key) {
		// Compare the provided key against a value stored in your app's
		// configuration.
		if ($key != Configure::read('Misc.hookKey')) {
			exit;
		}
	}

}
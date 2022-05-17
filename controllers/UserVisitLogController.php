<?php

namespace jstudioo\UserManagement\controllers;

use Yii;
use jstudioo\UserManagement\models\UserVisitLog;
use jstudioo\UserManagement\models\search\UserVisitLogSearch;
use jstudioo\UserManagement\components\AdminDefaultController;

/**
 * UserVisitLogController implements the CRUD actions for UserVisitLog model.
 */
class UserVisitLogController extends AdminDefaultController
{
	/**
	 * @var UserVisitLog
	 */
	public $modelClass = 'jstudioo\UserManagement\models\UserVisitLog';

	/**
	 * @var UserVisitLogSearch
	 */
	public $modelSearchClass = 'jstudioo\UserManagement\models\search\UserVisitLogSearch';

	public $enableOnlyActions = ['index', 'view', 'grid-page-size'];
}

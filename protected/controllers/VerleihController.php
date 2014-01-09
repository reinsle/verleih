<?php

class VerleihController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Verleih'),
		));
	}

	public function actionCreate() {
		$model = new Verleih;


		if (isset($_POST['Verleih'])) {
			$model->setAttributes($_POST['Verleih']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Verleih');


		if (isset($_POST['Verleih'])) {
			$model->setAttributes($_POST['Verleih']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Verleih')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Verleih');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Verleih('search');
		$model->unsetAttributes();

		if (isset($_GET['Verleih']))
			$model->setAttributes($_GET['Verleih']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}
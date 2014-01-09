<?php

class ArtikelController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Artikel'),
		));
	}

	public function actionCreate() {
		$model = new Artikel;


		if (isset($_POST['Artikel'])) {
			$model->setAttributes($_POST['Artikel']);

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
		$model = $this->loadModel($id, 'Artikel');


		if (isset($_POST['Artikel'])) {
			$model->setAttributes($_POST['Artikel']);

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
			$this->loadModel($id, 'Artikel')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Artikel');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Artikel('search');
		$model->unsetAttributes();

		if (isset($_GET['Artikel']))
			$model->setAttributes($_GET['Artikel']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}
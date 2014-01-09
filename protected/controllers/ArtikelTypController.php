<?php

class ArtikelTypController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'ArtikelTyp'),
		));
	}

	public function actionCreate() {
		$model = new ArtikelTyp;


		if (isset($_POST['ArtikelTyp'])) {
			$model->setAttributes($_POST['ArtikelTyp']);

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
		$model = $this->loadModel($id, 'ArtikelTyp');


		if (isset($_POST['ArtikelTyp'])) {
			$model->setAttributes($_POST['ArtikelTyp']);

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
			$this->loadModel($id, 'ArtikelTyp')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('ArtikelTyp');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new ArtikelTyp('search');
		$model->unsetAttributes();

		if (isset($_GET['ArtikelTyp']))
			$model->setAttributes($_GET['ArtikelTyp']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}
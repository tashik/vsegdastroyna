<?php

namespace Anketa\Controller;

use Anketa\Form\AnketaForm;
use Anketa\Model\Anketa;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AnketaController extends AbstractActionController
{
    public function indexAction()
    {
    }

    public function createAction()
    {
        $form = new AnketaForm();
        $form->get('submit')->setValue('Сохранить');

        $request = $this->getRequest();

        if (! $request->isPost()) {
            return ['form' => $form];
        }

        $anketa = new Anketa();
        $form->setInputFilter($anketa->getInputFilter());
        $form->setData($request->getPost());

        if (! $form->isValid()) {
            return ['form' => $form];
        }

        $anketa->exchangeArray($form->getData());
        $anketa->save($anketa);
        return $this->redirect()->toRoute('anketa');
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }

}
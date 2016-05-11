<?php

namespace Istruzioni\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Istruzioni\Service\IstruzioniService;
use Istruzioni\Form\IstruzioneForm;

class IndexController extends AbstractActionController
{
    private $istruzioniService;
    private $form;

    public function __construct(IstruzioniService $istruzioniService, IstruzioneForm $istruzioneForm) {
        $this->istruzioniService = $istruzioniService;
        $this->form = $istruzioneForm;
    }

    public function indexAction()
    {
        return new ViewModel([
            'lista' => $this->istruzioniService->getIstruzioni()
        ]);
    }

    public function aggiungiAction()
    {
        if ($this->getRequest()->isPost()) {
            $request = $this->getRequest();
            $postData = $request->getPost()->toArray();

            $this->form->setData($postData);

            if ($this->form->isValid()) {

                $istruzione = $this->istruzioniService->aggiungiNuovaIstruzione($postData);

                $this->flashMessenger()->addSuccessMessage('Istruzione aggiunta con successo!');

                $this->redirect()->toRoute('istruzioni');

            }
        }

        return new ViewModel([
            'form' => $this->form
        ]);
    }

    public function votoAction() {
        $idIstruzione = $this->params()->fromPost('istruzione');
        $voto = $this->params()->fromPost('voto');

        $istruzioneAggiornata = $this->istruzioniService->vota($idIstruzione, $voto);

        return new JsonModel([
            'istruzione' => $istruzioneAggiornata->toArray()
        ]);

    }

}

<?php

namespace E2N\candidateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class showCandidateController extends Controller {

    public function showCandidateAction() {
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('E2NcandidateBundle:user')
        ;
        $listUser = $repository->findAll();
        return $this->render('@E2Ncandidate/Default/showCandidate.html.twig', array(
                    'listUser' => $listUser));
    }

}

?>
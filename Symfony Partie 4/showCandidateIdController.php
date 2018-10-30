<?php

namespace E2N\candidateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class showCandidateIdController extends Controller {

    public function showCandidateIdAction($id) {
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('E2NcandidateBundle:user')
        ;
        $user = $repository->find($id);
        return $this->render('@E2Ncandidate/Default/showCandidateId.html.twig', array(
                    'user' => $user));
    }

}

?>
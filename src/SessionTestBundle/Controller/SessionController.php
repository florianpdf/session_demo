<?php

namespace SessionTestBundle\Controller;

use SessionTestBundle\Entity\Page;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SessionController extends Controller
{
    public function unAction(Request $request)
    {
        $session = $request->getSession();
        $array = array('clé' => "valeur", "cl2" => 'valeur2');
        $session->set('msg_page_1', $array);

        return $this->render('SessionTestBundle:Session:un.html.twig');
    }

    public function deuxAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('msg_page_2', 'hello ba moi je suis la page deux');
        return $this->render('SessionTestBundle:Session:deux.html.twig', array(
            // ...
        ));
    }

    public function troisAction()
    {

        return $this->render('SessionTestBundle:Session:trois.html.twig', array(
            // ...
        ));
    }

    public function validerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        $page = new Page();
        $page->setFieldUn($session->get('msg_page_1'));
        $page->setFieldDeux($session->get('msg_page_2'));

        $em->persist($page);
        $em->flush();

        $session->remove('msg_page_1');
        $session->remove('msg_page_2');

        return $this->redirectToRoute('un');
    }
}

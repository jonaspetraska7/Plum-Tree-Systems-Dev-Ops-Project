<?php

namespace App\Controller;

use App\Entity\Infoitem;
use App\Form\InfoType;
use App\Repository\InfoitemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/info", name="info")
 */
class InfoController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param InfoitemRepository $repository
     * @return Response
     */
    public function index(InfoitemRepository $repository)
    {
        $items = $repository->findAll();

        return $this->render('info/index.html.twig', [
            'infoitems' => $items,
        ]);
    }
    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request) {
        $info = new Infoitem();
        $form = $this->createForm(InfoType::class, $info);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($info);
            $em->flush();
            return $this->redirect($this->generateUrl('infoindex'));
        }


        return $this->render('info/create.html.twig',[
            'form' => $form->createView()
        ]);
;    }

    /**
     * @Route("/show/{id}", name="show")
     * @param Infoitem $infoitem
     * @return Response
     */
    public function show(Infoitem $infoitem) {

        return $this->render('info/show.html.twig',[
            'infoitem' => $infoitem
        ]);
    }
    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function remove(Infoitem $infoitem) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($infoitem);
        $em->flush();
        $this->addFlash('success', 'Item has been removed!');
        return $this->redirect($this->generateUrl('infoindex'));

    }



}

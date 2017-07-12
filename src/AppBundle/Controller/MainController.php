<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\SearchFormType;
use AppBundle\Util\ResultFinder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $search_form = $this->createForm(
            SearchFormType::class,
            null,
            array(
                'action'=>$this->generateUrl('index'),
            )
        );

        $search_form->handleRequest($request);

        if ($search_form->isValid()) {
            $search_text = $search_form->get('search_text')->getData();

            return $this->redirectToRoute('result_show',
                array(
                    'search_text' => $search_text,
                )
            );
        }

        return array(
            'form'=>$search_form->createView(),
        );
    }

    /**
     * @Route("/results/{search_text}", name="result_show")
     * @Template
     */
    public function resultAction(Request $request, $search_text)
    {
        $result_finder = new ResultFinder();

        $result_kaymu = $result_finder->findResultKaymu($search_text);
        $result_muncha = $result_finder->findResultMuncha($search_text);
        $result_sastodeal = $result_finder->findResultSastoDeal($search_text);


        return array(
            'search_text' => $search_text,
            'result_kaymu' => $result_kaymu,
            'result_muncha' => $result_muncha,
            'result_sastodeal' => $result_sastodeal,
        );
    }
}

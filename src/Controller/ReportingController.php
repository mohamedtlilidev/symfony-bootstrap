<?php
/**
 * Created by PhpStorm.
 * User: g361183
 * Date: 3/18/20
 * Time: 1:33 PM
 */


namespace App\Controller;
use App\Entity\ActHiProcinst;
use App\Entity\ActHiVarinst;
use App\Entity\QueryReporting;
use App\Entity\Variables;
use App\Repository\ActHiProcinstRepository;
use App\Service\ExportCsvFileService;
use App\Service\LdapService;
use App\Service\NativeQueryService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

Class ReportingController extends AbstractController
{
    private $ldapservice;
    private $name;
    private $session;
    private $exportcsvfileservice;
    private $nativeQueryService;

    public function __construct(
        LdapService $ldapService,
        SessionInterface $session,
        ExportCsvFileService $exportCsvFileService,
        NativeQueryService $nativeQueryService
    )
    {
        $this->ldapservice = $ldapService;
        $this->session = $session;
        $this->exportcsvfileservice = $exportCsvFileService;
        $this->nativeQueryService = $nativeQueryService;

    }

    /**
     * @Route("/get-status", name="get-status")
     */
    public function executeRequestFixe()
    {
//        $var_instances = $this->getDoctrine()->getRepository(ActHiVarinst::class)->findWorkflowStatus();
        $var_instances = $this->getDoctrine()->getRepository(ActHiProcinst::class)->getWorkflowStatus();
        return $this->render('result_request.html.twig',
            [
                'userName'=>$this->ldapservice->getUserSession($this->session, 'username',$this->getUser()->getUsername()),
                 'var_instances' =>$var_instances
            ]);

    }
    /**
     * @Route("/get-annee", name="get-annee")
     */
    public function getWorkflowsAnnee()
    {
        $var_instances = $this->getDoctrine()->getRepository(ActHiProcinst::class)->getAllDataWorkflow();
        return $this->render('report.html.twig',
            [
                'userName'=>$this->ldapservice->getUserSession($this->session, 'username',$this->getUser()->getUsername()),
                'var_instances' =>$var_instances
            ]);

    }

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/reporting/{nameQuery}", defaults={"nameQuery" = null}, name="reporting")
     */
    public function reporting($nameQuery)
    {
        $queryReporting = $this->getDoctrine()
                ->getRepository(QueryReporting::class)
                ->findOneBy(array('nameQuery'=>$nameQuery));

        if ($queryReporting instanceof QueryReporting) {
            //Call native query with parmas $queryReporting ->getQuery();
           $resultQuery = $this->nativeQueryService->executeNativeQuery();
        }
        $var_instances = $this->getDoctrine()->getRepository(ActHiProcinst::class)->getAllDataWorkflow();
        return $this->render('report.html.twig',
            [
                'userName'=>"repo",
                'var_instances' =>$var_instances
            ]);

    }

    /**
     * @Route("/get-data", name="get-data")
     */
    public function getAllData()
    {
        $variables_workflows = $this->getDoctrine()->getRepository(Variables::class)->getAllVariables();
        return $this->render('variables.html.twig',
            [
                'userName'=>$this->ldapservice->getUserSession($this->session, 'username',$this->getUser()->getUsername()),
                'workflows' =>$variables_workflows
            ]);

    }

//    /**
//     * @Route("/get-data", name="get-data")
//     */
//    public function executeRequestParametrable()
//    {
////
//       echo "hello paramétrable request";exit;
//
//    }

    /**
     * @Route("/export-csv", name="export-csv")
     */
    public function exporterCsv()
    {
        $filename='Workflows-en cours.csv';
//        $records=$this->getDoctrine()->getRepository(ActHiVarinst::class)->findWorkflowStatus();
        $records=$this->getDoctrine()->getRepository(ActHiProcinst::class)->getWorkflowStatus();
//        $file=$this->exportcsvfileservice->exportCsvReport($records,$filename);
        $file=$this->exportcsvfileservice->array_csv_download($records);
        return $this->render('report.html.twig',
            [
                'userName'=>$this->ldapservice->getUserSession($this->session, 'username',$this->getUser()->getUsername()),
                'file' =>$file
            ]);

    }



}
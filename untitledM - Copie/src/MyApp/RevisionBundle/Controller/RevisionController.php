<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 06/12/2017
 * Time: 22:57
 */

namespace MyApp\RevisionBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class RevisionController extends Controller
{
public function AllAction()
{
    $revision = $this->getDoctrine()->getManager()
    ->getRepository('MyAppRevisionBundle:Revision')
    ->findAll();
    $serializer = new Serializer([new ObjectNormalizer()]);
    $formatted =$serializer->normalize($revision);
    return new JsonResponse($formatted);
}
}
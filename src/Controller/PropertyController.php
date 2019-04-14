<?php

namespace App\Controller;

use phpDocumentor\Reflection\DocBlock\Tags\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController extends AbstractController
{
    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */

    public function index(): Response
    {

        $property = new Property();
        $property->setTitle('Mon premier bien')
            ->setPrice(200000)
            ->setRooms(4)
            ->setBedrooms(3)
            ->setDescription('Une petite description')
            ->setFloor(4)
            ->setSurface(60)
            ->setHeat(1)
            ->setCity('Clermont')
            ->setAddress('12 rue bernard brunhes')
            ->setPostalCode('63000');

       $em = $this->getDoctrine()->getManager();
       $em->persist($property);
       $em->flush();

        return $this->render('property/index.html.twig', ['current_menu' => 'properties']);
    }
}

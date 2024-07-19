<?php

namespace App\Controller;
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/adm')]
    public function carSale ()
    {
        $car = 
        [
            'image' => 'https://imagenes.km77.com/fotos/bbtcontent/clippingnew/KM7KPH20100203_0043/small.jpg',
            'brand' => 'Ford',
            'code' => '01562',
            'model' => 'Fiesta',
            'age' => '2006',
            'style' => 'Turismo',
            'kilometres' => '158.235',
            'colors'=> 'gris plata',
            'description' => 'Motor delantero transversal / tracción delantera'
        ];

        return $this -> render ( 'AutosOcasion/autosOcasion.html.twig', [ 'car' => $car ] );
    }

    #[Route('/cars')]
    public function cars ()
    {
        $cars = 
        [
            [
                'image' => 'https://imagenes.km77.com/fotos/bbtcontent/clippingnew/KM7KPH20100203_0043/small.jpg',
                'brand' => 'Ford',
                'code' => '01562',
                'model' => 'Fiesta',
                'age' => '2006',
                'style' => 'Turismo',
                'kilometres' => '158.235',
                'colors'=> 'gris plata',
                'description' => 'Motor delantero transversal / tracción delantera'
            ],

            [
                'image' => 'https://imagenes.km77.com/fotos/bbtcontent/clippingnew/KM7KPH20100203_0043/small.jpg',
                'brand' => 'Ford',
                'code' => '01562',
                'model' => 'Fiesta',
                'age' => '2006',
                'style' => 'Turismo',
                'kilometres' => '158.235',
                'colors'=> 'gris plata',
                'description' => 'Motor delantero transversal / tracción delantera'
            ],

            [
                'image' => 'https://imagenes.km77.com/fotos/bbtcontent/clippingnew/KM7KPH20100203_0043/small.jpg',
                'brand' => 'Ford',
                'code' => '01562',
                'model' => 'Fiesta',
                'age' => '2006',
                'style' => 'Turismo',
                'kilometres' => '158.235',
                'colors'=> 'gris plata',
                'description' => 'Motor delantero transversal / tracción delantera'
            ],

            [
                'image' => 'https://imagenes.km77.com/fotos/bbtcontent/clippingnew/KM7KPH20100203_0043/small.jpg',
                'brand' => 'Ford',
                'code' => '01562',
                'model' => 'Fiesta',
                'age' => '2006',
                'style' => 'Turismo',
                'kilometres' => '158.235',
                'colors'=> 'gris plata',
                'description' => 'Motor delantero transversal / tracción delantera'
            ],

            [
                'image' => 'https://imagenes.km77.com/fotos/bbtcontent/clippingnew/KM7KPH20100203_0043/small.jpg',
                'brand' => 'Ford',
                'code' => '01562',
                'model' => 'Fiesta',
                'age' => '2006',
                'style' => 'Turismo',
                'kilometres' => '158.235',
                'colors'=> 'gris plata',
                'description' => 'Motor delantero transversal / tracción delantera'
            ],

            [
                'image' => 'https://imagenes.km77.com/fotos/bbtcontent/clippingnew/KM7KPH20100203_0043/small.jpg',
                'brand' => 'Ford',
                'code' => '01562',
                'model' => 'Fiesta',
                'age' => '2006',
                'style' => 'Turismo',
                'kilometres' => '158.235',
                'colors'=> 'gris plata',
                'description' => 'Motor delantero transversal / tracción delantera'
            ]
        ];

        return $this -> render ( 'AutosOcasion/autosOcasionsList.html.twig', [ 'cars' => $cars ] );
    } 

}
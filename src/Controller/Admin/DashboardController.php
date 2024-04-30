<?php

namespace App\Controller\Admin;

use app\Entity\Ability;
use app\Entity\Item;
use app\Entity\Moveset;
use app\Entity\Pokemon;
use app\Entity\Species;
use app\Entity\Team;
use app\Entity\Type;
use app\Entity\User;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(SpeciesCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Pokebuilder');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Accueil', 'fa fa-home');
        

        // yield MenuItem::linkToCrud('Pokemon', 'fa-solid fa-user', Pokemon::class);

        // yield MenuItem::subMenu("Pokemon")
        // ->setSubItems([
        //     MenuItem::linkToCrud('Liste', 'fas fa-newspaper', Pokemon::class)
        // ]);



        // yield MenuItem::subMenu("Pokemon")
        //     ->setSubItems([
        //         MenuItem::linkToCrud('Liste', 'fas fa-newspaper', Pokemon::class),
        //         MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Pokemon::class)
        //             ->setAction('new')
        //     ]);

        // yield MenuItem::subMenu("Utilisateur")
        //     ->setSubItems([
        //         MenuItem::linkToCrud('Liste', 'fas fa-newspaper', User::class),
        //         MenuItem::linkToCrud('Ajouter', 'fas fa-plus', User::class)
        //             ->setAction('new')
        //     ]);


        // yield MenuItem::subMenu("Especes")
        //     ->setSubItems([
        //         MenuItem::linkToCrud('Liste', 'fas fa-newspaper', Species::class),
        //         MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Species::class)
        //             ->setAction('new')
        //     ]);

        // yield MenuItem::subMenu("Item")
        //     ->setSubItems([
        //         MenuItem::linkToCrud('Liste', 'fas fa-newspaper', Item::class),
        //         MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Item::class)
        //             ->setAction('new')
        //     ]);

        // yield MenuItem::subMenu("Moveset")
        //     ->setSubItems([
        //         MenuItem::linkToCrud('Liste', 'fas fa-newspaper', Moveset::class),
        //         MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Moveset::class)
        //             ->setAction('new')
        //     ]);

        // yield MenuItem::subMenu("Type")
        //     ->setSubItems([
        //         MenuItem::linkToCrud('Liste', 'fas fa-newspaper', Type::class),
        //         MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Type::class)
        //             ->setAction('new')
        //     ]);

        // yield MenuItem::subMenu("Team")
        //     ->setSubItems([
        //         MenuItem::linkToCrud('Liste', 'fas fa-newspaper', Team::class),
        //         MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Team::class)
        //             ->setAction('new')
        //     ]);

        // yield MenuItem::subMenu("Ability")
        //     ->setSubItems([
        //         MenuItem::linkToCrud('Liste', 'fas fa-newspaper', Ability::class),
        //         MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Ability::class)
        //             ->setAction('new')
        //     ]);



        yield MenuItem::section('Lien');
        yield MenuItem::linkToUrl('Symfony', 'fa-brands fa-symfony', '/');
        yield MenuItem::linkToUrl('Github', 'fab fa-github', 'https://github.com/TryZorce/Projet-Final/tree/main');
        yield MenuItem::linkToUrl('YouTube', 'fab fa-youtube', 'https://www.youtube.com/watch?v=Y9Zw6xOGly0&ab_channel=NEFOS');
    }
}

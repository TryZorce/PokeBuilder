<?php

namespace App\Controller\Admin;

use app\Entity\Pokemon;
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
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(PokemonCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Pokebuilder');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Accueil', 'fa fa-home');

        yield MenuItem::subMenu("Pokemon")
            ->setSubItems([
                MenuItem::linkToCrud('Liste', 'fas fa-newspaper', Pokemon::class),
                MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Pokemon::class)
                    ->setAction('new')
            ]);

        // yield MenuItem::subMenu("Utilisateur")
        //     ->setSubItems([
        //         MenuItem::linkToCrud('Liste', 'fas fa-newspaper', User::class),
        //         MenuItem::linkToCrud('Ajouter', 'fas fa-plus', User::class)
        //             ->setAction('new')
        //     ]);



        yield MenuItem::section('Lien');
        yield MenuItem::linkToUrl('Symfony', 'fa-brands fa-symfony', '/');
        yield MenuItem::linkToUrl('Github', 'fab fa-github', 'https://github.com/TryZorce/Projet-Final/tree/main');
        yield MenuItem::linkToUrl('YouTube', 'fab fa-youtube', 'https://www.youtube.com/watch?v=Y9Zw6xOGly0&ab_channel=NEFOS');
    }
}

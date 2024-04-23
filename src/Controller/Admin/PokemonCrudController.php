<?php

namespace App\Controller\Admin;

use App\Entity\Pokemon;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class PokemonCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pokemon::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            NumberField::new('level'),
            TextField::new('nickname'),
        ];
    }
    
}

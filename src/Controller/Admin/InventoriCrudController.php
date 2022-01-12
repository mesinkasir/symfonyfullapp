<?php

namespace App\Controller\Admin;

use App\Entity\Inventori;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InventoriCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Inventori::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}

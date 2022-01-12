<?php

namespace App\Controller\Admin;

use App\Entity\Shipping;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ShippingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Shipping::class;
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

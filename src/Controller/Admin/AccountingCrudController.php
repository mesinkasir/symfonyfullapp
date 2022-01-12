<?php

namespace App\Controller\Admin;

use App\Entity\Accounting;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AccountingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Accounting::class;
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

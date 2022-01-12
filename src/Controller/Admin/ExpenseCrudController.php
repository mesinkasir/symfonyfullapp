<?php

namespace App\Controller\Admin;

use App\Entity\Expense;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ExpenseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Expense::class;
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

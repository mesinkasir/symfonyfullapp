<?php

namespace App\Controller\Admin;

use App\Entity\Homepage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class HomepageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Homepage::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextField::new('decription'),
            UrlField::new('cover'),
            TextareaField::new('section1title'),
            UrlField::new('section1cover'),
            TextareaField::new('section1content'),
            TextField::new('section2title'),
            UrlField::new('section2cover'),
            TextareaField::new('section2content'),
            TextField::new('footer'),
            UrlField::new('footercover'),
            TextareaField::new('footercontent')
        ];
    }
   
}

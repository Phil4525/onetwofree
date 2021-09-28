<?php

namespace App\Controller\Admin;

use App\Entity\Brief;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BriefCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Brief::class;
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

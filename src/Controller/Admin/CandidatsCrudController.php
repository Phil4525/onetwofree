<?php

namespace App\Controller\Admin;

use App\Entity\Candidats;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CandidatsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Candidats::class;
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

<?php

namespace App\Controller\Admin;
use App\Entity\Homepage;
use App\Entity\Gallery;
use App\Entity\Contact;
use App\Entity\About;
use App\Entity\User;
use App\Entity\Agenda;
use App\Entity\Inventori;
use App\Entity\Shipping;
use App\Entity\Video;
use App\Entity\Project;
use App\Entity\Purchase;
use App\Entity\Invoice;
use App\Entity\Accounting;
use App\Template\Register;
use App\Entity\CustomerCredit;
use App\Entity\Debt;
use App\Entity\Services;
use App\Entity\Article;
use App\Entity\Income;
use App\Entity\Expense;
use App\Entity\Phonebook;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
       return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->disableUrlSignatures()
            ->setTitle('axcora.my.id');
            ;
    }
  # {
  #     return Dashboard::new()
  #         ->setTitle('Symfoweb');
  # }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Home Page', 'fab fa-symfony');
        yield MenuItem::section('Website');
        yield MenuItem::linkToCrud('Home', 'fa fa-home', Homepage::class);
        yield MenuItem::linkToCrud('About', 'fa fa-heart', About::class);
        yield MenuItem::linkToCrud('Services', 'fa fa-award', Services::class);
        yield MenuItem::linkToCrud('Article', 'fa fa-pen-nib', Article::class);
        yield MenuItem::linkToCrud('Gallery', 'fa fa-camera-retro' , Gallery::class);
        yield MenuItem::linkToCrud('Video', 'fa fa-film' , Video::class);
        yield MenuItem::linkToCrud('Contact', 'fa fa-map', Contact::class);
        yield MenuItem::section('Application');
        yield MenuItem::linkToCrud('Agenda', 'fa fa-calendar', Agenda::class);
        yield MenuItem::linkToCrud('Project', 'fa fa-briefcase', Project::class);
        yield MenuItem::linkToCrud('Inventori', 'fa fa-box', Inventori::class);
        yield MenuItem::linkToCrud('Purchase', 'fa fa-shopping-basket', Purchase::class);
        yield MenuItem::linkToCrud('Invoice', 'fa fa-file-invoice-dollar', Invoice::class);
        yield MenuItem::linkToCrud('Shipping', 'fas fa-shipping-fast', Shipping::class);
        yield MenuItem::linkToCrud('Customer Credit', 'far fa-credit-card' , CustomerCredit::class);
        yield MenuItem::linkToCrud('Supplier Debt', 'fas fa-credit-card', Debt::class);
        yield MenuItem::linkToCrud('Income', 'fas fa-hand-holding-usd', Income::class);
        yield MenuItem::linkToCrud('Expense', 'fa fa-comment-dollar', Expense::class);
        yield MenuItem::linkToCrud('Accounting', 'fa fa-briefcase', Accounting::class);
        yield MenuItem::linkToCrud('Phonebook', 'fas fa-address-card', Phonebook::class);
        yield MenuItem::section('Setting');
        yield MenuItem::linkToCrud('User List', 'fa fa-user-circle', User::class);
        yield MenuItem::linkToUrl('User Register', 'fa fa-user-shield', ('register'));
        yield MenuItem::linkToUrl('Documentation', 'fa fa-book', ('https://www.hockeycomputindo.com/2022/01/symfony-app-inventori-invoice.html'));
        yield MenuItem::linkToUrl('Video', 'fab fa-youtube', ('https://www.youtube.com/watch?v=6ivsvqhPvn8'));
        yield MenuItem::linkToUrl('About App', 'fa fa-rocket', ('https://axcora.my.id/symfowebapp/public/'));
        yield MenuItem::linkToUrl('Developer', 'far fa-smile', ('https://creativebydre.vercel.app'));
        yield MenuItem::section('');
        yield MenuItem::linkToLogout('Log Out', 'fa fa-power-off');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}

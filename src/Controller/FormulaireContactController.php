<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormulaireContactController extends AbstractController
{
    /**
     * @Route("/contact", name="formulaire_contact", methods={"GET","POST"})
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $contact=new Contacts();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        ;

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            
            $user = $form->getData();
            $url =  './uploads/' . $user->getDocument();

            $mail = (new Email())
                ->from($user->getEmail())
                ->to('philippe.mariou@colombbus.org')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Nouvelle demande de contact')
                ->text('Sender : '.$user->getEmail().\PHP_EOL.$user->getMessage(),'text/plain')
                ->html('<p>See Twig integration for better HTML integration!</p>');
                if ( $user->getDocument()) {
                    $mail
                        ->attachFromPath($url);
                }
                ;
            $mailer->send($mail);

           
            //return $this->redirectToRoute('contact_success');
            $url = $this->generateUrl('home');
            return new Response("
            <html>
                <body>
                    <p>Le message a bien été envoyé</p>  
                    <a href=\"$url\">Retour</a>
                </body>
            </html>
            ");
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}

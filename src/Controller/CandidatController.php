<?php

namespace App\Controller;

use App\Entity\Concours;
use App\Entity\Candidats;
use App\Form\CandidatType;
use App\Form\ConcoursType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CandidatController extends AbstractController
{
    /**
     * @Route("/candidat", name="candidat")
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $candidat=new Candidats();
        $form = $this->createForm(CandidatType::class, $candidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidat);
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
                ->subject('Nouveau candidat !')
                ->text('Sender : '.$user->getEmail().\PHP_EOL.$user->getMessage(),'text/plain')
                ->html('<p>See Twig integration for better HTML integration!</p>');
                if ( $user->getDocument()) {
                    $mail
                        ->attachFromPath($url);
                }
                ;
            $mailer->send($mail);
            
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

        return $this->render('candidat/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Brief;
use App\Form\BriefType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BriefController extends AbstractController
{
    /**
     * @Route("/brief", name="brief")
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {

        $brief=new Brief();
        $form = $this->createForm(BriefType::class, $brief);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($brief);
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
                ->subject('Nouveau brief')
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
                    <p>Le brief a bien été envoyé</p>  
                    <a href=\"$url\">Retour</a>
                </body>
            </html>
            ");
        }

        return $this->render('brief/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

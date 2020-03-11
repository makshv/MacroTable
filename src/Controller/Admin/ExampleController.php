<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Model\Admin\Message;

/**
 * Example controller.
 *
 * @Route(path="/")
 */
class ExampleController extends AbstractController
{
    /**
     * @Route("/", defaults={}, name="message.list")
     *
     * @return Response
     */
    public function indexAction()
    {
        $tableCode = 'example.list';
        $messages = [];
        for ($i = 1; $i <= 10; $i++) {
            $message = new Message();
            $message->setId($i)
                    ->setText('Text Message #'.$i)
                    ->setSubject('Subject #'.$i)
                    ->setDateCreate(new \DateTime());
            $messages[] = $message;
        }
        return $this->render('example/message.list.html.twig',
            [
                'messages' => $messages,
                'tableCode' => $tableCode,
            ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function reg(Request $request, UserPasswordEncoderInterface $passEncoder, ValidatorInterface $validator)
    {
        $regform = $this->createFormBuilder()
            ->add('username', TextType::class, [
                'label' => 'UserName'
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password']
            ])

            ->add('register', SubmitType::class)
            ->getForm();

        $regform->handleRequest($request);

        if ($regform->isSubmitted()) {
            $masuk = $regform->getData();

            $user = new User();
            $user->setUsername($masuk['username']);

            $user->setPassword(
                $passEncoder->encodePassword($user, $masuk['password'])
            );
            $user->setRawPassword($masuk['password']);

            $errors = $validator->validate($user);
            if (count($errors) > 0) {
                return $this->render('register/index.html.twig', [
                    'regform' => $regform->createView(),
                    'errors' => $errors
                ]);
            } else {
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
            }
            return $this->redirect($this->render('admin'));
        }


        return $this->render('register/index.html.twig', [
            'regform' => $regform->createView(),
            'errors' => null
        ]);
    }
}

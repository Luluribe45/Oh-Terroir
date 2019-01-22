<?php
namespace Controller;

use Model\ContactDetailsManager;

class ContactDetailsController extends AbstractController
{
    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function show()
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contactDetails = $contactManager->selectUniquetEntry();

        return $this->twig->render('Admin/contactDetailsShow.html.twig', [
            'contactDetails' => $contactDetails
        ]);
    }
    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function edit(int $id) : string
    {
        $resultCheckForm = ['cleanPost' => '', 'errors' => ''];
        $validateForm = '';

        $contactDetailsManager = new ContactDetailsManager($this->getPdo());
        $contactDetails = $contactDetailsManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $resultCheckForm = $this->checkForm($_POST);

            if (count($resultCheckForm['errors']) == 0) {
                // Hydratation class contactDetails
                $contactDetails->setAddress($resultCheckForm['cleanPost']['address']);
                $contactDetails->setZipCode($resultCheckForm['cleanPost']['zipcode']);
                $contactDetails->setCity($resultCheckForm['cleanPost']['city']);
                $contactDetails->setPhoneNumber($resultCheckForm['cleanPost']['phonenumber']);
                $contactDetails->setEmailAddress($resultCheckForm['cleanPost']['email']);

                $contactDetailsManager->update($contactDetails);
                header("HTTP/1.1 303 See Other");
                header('Location: /admin/contact-details/edit/'.intval($_POST['id']).'?status=validate');
                exit();
            }
        }

        if (isset($_GET['status']) && $_GET['status'] === 'validate') {
            $validateForm = "Vos modifications ont été enregistrées.";
        }

        return $this->twig->render('Admin/contactDetails.html.twig', [
            'contactDetails' => $contactDetails,
            'cleanPost' => $resultCheckForm['cleanPost'],
            'errors' => $resultCheckForm['errors'],
            'validateForm' => $validateForm
        ]);
    }

    /**
     * Vérification des champs du formulaire
     * Retourne un tableau contenant les valeurs nettoyées et les erreurs
     * @param array $formValues
     * @return array
     */
    private function checkForm(array $formValues) : array
    {
        $errors = [];
        $cleanPost = [];

        foreach ($formValues as $key => $value) {
            $cleanPost[$key] = trim($value);
        }

        if (!empty($cleanPost['address']) && !empty($cleanPost['zipcode']) && !empty($cleanPost['city'])
            && !empty($cleanPost['phonenumber']) && !empty($cleanPost['email'])) {
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]]+/iu", $cleanPost['address'])) {
                $errors["address"] = 'Les caractères spéciaux ne sont pas autorisées.';
            }

            if (!preg_match("/\b[0-9]{5}\b/", $cleanPost['zipcode'])) {
                $errors["zipcode"] = 'Le code postal doit contenir 5 chiffres.';
            }

            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]0-9]+/iu", $cleanPost['city'])) {
                $errors["city"] = 'Les caractères spéciaux et les chiffres ne sont pas autorisées.';
            }

            if (!preg_match("/\b[0-9]{10}\b/", $cleanPost['phonenumber'])) {
                $errors["phonenumber"] = 'Le numéro de téléphone doit contenir 10 chiffres.';
            }

            if (!preg_match("/\b[\w.-]+@[\w.-]{2,}\.[a-z]{2,5}\b/", $cleanPost['email'])) {
                $errors["email"] = 'Le format de votre email est invalide.';
            }
        } else {
            $errors["global"] = 'Tous les champs sont obligatoires.';
        }

        return ['cleanPost' => $cleanPost, 'errors' => $errors];
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 24/10/18
 * Time: 13:57
 */

namespace Controller;

use Model\GrowerCategoryManager;
use Model\GrowerManager;
use Model\ContactDetailsManager;
use Model\ScheduleManager;
use Swift_SmtpTransport;
use Swift_Mailer;
use Swift_Message;
use Service\ScheduleService;

class GrowerController extends AbstractController
{
    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function show()
    {
        $resultCheckForm = ['cleanPost' => '', 'errors' => ''];
        $validateForm = '';

        $growerManager = new GrowerManager($this->getPdo());
        $growers = $growerManager->selectAll();

        $growerCategoryManager = new GrowerCategoryManager($this->getPdo());
        $growerCategories = $growerCategoryManager->selectAll();

        $contactManager = new ContactDetailsManager($this->getPdo());
        $contact = $contactManager->selectUniquetEntry();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $timeSlotsPerDayAMandPM = $scheduleManager->selectSchedule();
        $scheduleService = new ScheduleService();
        $schedules = $scheduleService->optimizeDisplayTimeSlots($timeSlotsPerDayAMandPM);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $resultCheckForm = $this->checkForm($_POST);
            // envoi mail
            $sendEmailResult = $this->sendEmail($resultCheckForm['cleanPost']);
            if ($sendEmailResult === 1) {
                header("HTTP/1.1 303 See Other");
                header('Location: /grower?status=validate#formGrower');
                exit();
            } else {
                $resultCheckForm['errors']['global'] = "Une erreur est survenue, merci de ressayer plus tard.";
            }
        }

        if (isset($_GET['status']) && $_GET['status'] === 'validate') {
            $validateForm = "Votre message a bien été envoyé.";
        }

        return $this->twig->render('Grower/show.html.twig', [
            "growerPage" => "active",
            "contact" => $contact,
            "schedules" => $schedules,
            "growerCategories" => $growerCategories,
            "cleanPost" => $resultCheckForm['cleanPost'],
            "errors" => $resultCheckForm['errors'],
            "validateForm" => $validateForm,
            "growers" => $growers,
        ]);
    }

    /**
     * Vérification des champs du formulaire
     * @param array $formValues
     * @return array
     */
    public function checkForm(array $formValues) : array
    {
        $errors = [];
        $cleanPost = [];
        $emptyFieldForm = false;

        foreach ($formValues as $key => $value) {
            $cleanPost[$key] = trim($value);
            if (empty(trim($value))) {
                $emptyFieldForm = true;
            }
        }

        if ($emptyFieldForm === false) {
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]]+/iu", $cleanPost['company'])) {
                $errors["company"] = 'Les caractères spéciaux ne sont pas autorisées.';
            }
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]0-9]+/iu", $cleanPost['name'])) {
                $errors["name"] = 'Les caractères spéciaux et les chiffres ne sont pas autorisées.';
            }
            if (!preg_match("/\b[0-9]{10}\b/", $cleanPost['phonenumber'])) {
                $errors["phonenumber"] = 'Le numéro de téléphone doit contenir 10 chiffres.';
            }
            if (!preg_match("/\b[\w.-]+@[\w.-]{2,}\.[a-z]{2,5}\b/", $cleanPost['email'])) {
                $errors["email"] = 'Le format de votre email est invalide.';
            }
            if (preg_match_all("/[\[^@&\"()!_$*€£`+=\/;?#<>\]]+/iu", $cleanPost['products'])) {
                $errors["products"] = 'Les caractères spéciaux ne sont pas autorisées.';
            }
        } else {
            $errors["global"] = 'Tous les champs sont obligatoires.';
        }

        return ['cleanPost' => $cleanPost, 'errors' => $errors];
    }

    /**
     * @param array $emailElements
     * @return int
     */
    public function sendEmail(array $emailElements)
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contactDetails = $contactManager->selectUniquetEntry();

        // smtp.ohterroir-orleans.fr ?
        $transport = new Swift_SmtpTransport('smtp.sfr.fr', 25);

        $mailer = new Swift_Mailer($transport);

        $emailFrom = $emailElements['company'] . ' - ' . $emailElements['name'];
        $userMessage = $emailElements['company'] . "\r\n";
        $userMessage .= $emailElements['name'] . "\r\n";
        $userMessage .= 'Téléphone : ' . $emailElements['phonenumber'] . "\r\n";
        $userMessage .= 'Email : ' . $emailElements['email'] . "\r\n";
        $userMessage .= 'Produit(s) proposé(s) : ' . $emailElements['products'] . "\r\n";
        $userMessage .= ' ------ ' . "\r\n";
        $userMessage .= $emailElements['message'] . "\r\n";

        $message = new Swift_Message('OH TERROIR - Demande de partenariat');
        $message->setFrom([htmlentities($emailElements['email']) => htmlentities($emailFrom)]);
        $message->setTo([$contactDetails->getEmailAddress() => "Oh Terroir"]);
        $message->setBody(htmlspecialchars($userMessage, ENT_NOQUOTES, 'UTF-8'));

        return $mailer->send($message);
    }
}

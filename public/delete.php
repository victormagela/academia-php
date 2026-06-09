<?php
    require_once "../src/Classes/Dbh.php";
    require_once "../src/Classes/RegistrationRepository.php";
    require_once "../src/Classes/Registration.php";

    $repo = new RegistrationRepository(Dbh::getConnection());

    if (!isset($_GET['id'])) exit;

    $registration = $repo->findById(intval($_GET['id']));
    $repo->deleteRegistration($registration->getId());

    header("Location: ./registrations.php");
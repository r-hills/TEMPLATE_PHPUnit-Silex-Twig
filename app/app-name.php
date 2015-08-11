<?php
    // Dependencies
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    // Initiate Session for storing data locally
    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    // For BSOD and other serious error debugging uncomment these lines:
    // use Symfony\Componet\Debug\Debug;
    // Debug::enable();


    // Initialize application object
    $app = new Silex\Application();

    // Uncomment line below for debug messages
    // $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    // Use 'echo' and 'var_dump($array_name)' for variable content debugging

    // Route for root directory to display contact entry form and all contacts
    // $app->get("/", function() use ($app) {
    //     return $app['twig']->render('index.html.twig', array('list_of_contacts' => Contact::getAll()));
    // });

    // // Route to display contact successfully created page
    // $app->post("/create_contact", function() use ($app) {
    //     $contact = new Contact($_POST['name'],$_POST['phone'],$_POST['address']);
    //     $contact->save();

    //     return $app['twig']->render('create_contact.html.twig', array('newcontact' => $contact));
    // });

    // // Route to display confirmation of deleting all contacts
    // $app->get("/delete_contacts", function() use ($app) {
    //     Contact::deleteAll();
    //     return $app['twig']->render('delete_contacts.html.twig', array('list_of_contacts' => array() ));
    // });

    return $app;

?>

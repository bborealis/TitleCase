<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/TitleCaseGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('create_title.html.twig');
    });

    $app->get("/titles", function() use ($app) {
        $titles = new TitleCaseGenerator();
        $title_cased_phrase = $titles->makeTitleCase($_GET['format']);
        //$formatted_title = function makeTitleCase($title);
        return $app['twig']->render('output.html.twig', array('title' => $title_cased_phrase));
    });
    return $app;
?>

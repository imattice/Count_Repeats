<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/results", function() use($app){
        $repeats = new RepeatCounter;
        $input_word = $_GET['input_word'];
        $input_array = $_GET['input_array'];
        $new_counter = $repeats->countRepeats($input_word, $input_array);
        return $app['twig']->render('results.html.twig', array('input' => $input_word, 'result' => $new_counter));

    });

    return $app;
?>

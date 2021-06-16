<?php
$id = $_GET['id'] ?? 0;
foreach ($boxes as &$box) {
    if ($box['id'] == $id) {


        //validtion
        if($box['amount'] < (int) $_POST['amount']){
            setMessage('Tiek agurku nera');
            redirectToAction('rem', $id);
        }


        $box['amount']-= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/boxes.json', json_encode($boxes));
        setMessage($_POST['amount'] . ' ' . 'Agurkai issimti');
        redirect();
    }
}
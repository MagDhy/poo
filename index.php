<?php

 //créer une classe formulaire qui permet de faire

 require 'form.php';

    $form = new Form($_POST);

    echo $form->create_form('#', 'post', $tab_form = array());
    echo $tab_form->input('username');
    echo $tab_form->input('password');
    echo $tab_form->select('country', $country = ['Belgium', 'Germany', 'France', 'Italy', 'Spain', 'England']);
    echo $tab_form->textarea('comments', 30, 5);
    echo $tab_form->radio('gender', 'gender', 'Male');
    echo $tab_form->checkbox('checkbox', 'Transports', 'car');
    echo $tab_form->submit();
?>


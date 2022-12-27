<?php
    $acteurs2 = [
         [
            'id_acteur' => '1',
            'acteur' => 'Formation&co',
            'logo' => 'formation_co.png',
            'description' => 'Formation&co est une association française présente sur tout le territoire.',
        ],
        [
            'id_acteur' => '2',
            'acteur' => 'Protectpeople',
            'logo' => 'protectpeople.png',
            'description' => 'Protectpeople finance la solidarité nationale.',
        ],
        [
            'id_acteur' => '3',
            'acteur' => 'DSA France',
            'logo' => 'dsa_france.png',
            'description' => 'Dsa France accélère la croissance du territoire et s\'engage avec les collectivités territoriales.',
        ],
        [
            'id_acteur' => '4',
            'acteur' => 'CDE',
            'logo'=> 'cde.png',
            'description' => 'La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation.',
        ],
    ];
    
    $account = [
        [
            'id_user' => '1',
            'nom' => '',
            'prenom' => '',
            'username' => '',
            'password' => '*******',
            'question' => 'veuillez choisir une question secrète',
            'reponse' => 'veuillez écrire la réponse à votre question',
        ],
    ];

    $post = [
        [
            'id_post' => '1',
            'id_user' => 'username',
            'id_acteur' => '1',
            'date_add' => '12.12.2022',
            'post' => 'Parfait !',
            'is_enabled' => true,
        ],
    ];

    $vote = [
        [
            'id_user' => '1',
            'id_acteur' => '1',
            'vote' => '',
        ],
    ];

    ?>


    


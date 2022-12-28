
<?php include_once('connexion.php'); ?>
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
            'nom' => 'Werner',
            'prenom' => 'Carole',
            'username' => 'Caro63',
            'password' => 'admin63',
            'question' => 'Quel est mon animal domestique ?',
            'reponse' => 'Chien cané corso',
        ],

        [
            'id_user' => '1',
            'nom' => 'Werner',
            'prenom' => 'Alicia',
            'username' => 'Alicia63',
            'password' => 'admin14',
            'question' => 'Quel est mon animal domestique ?',
            'reponse' => 'Chien',
        ]
    ];

    $post = [
        [
            'id_post' => '1',
            'id_user' => 'username',
            'id_acteur' => '1',
            'date_add' => '',
            'post' => '',
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

    $_SESSION = [
        [
            'id_user' => '1',
            'username' => '',
            'password' => '',
        ]
        ];

    $_COOKIE = [
        [
            'id_user' => '1',
            'username' => '',
            'password' => '',
        ]
        ];

    $isAllowedToEnter = [
        [
            'id_user' => '1',
            'username' => '',
            'password' => '',
            'is_enabled' => 'true',
        ]
        ];

    if(isset($_POST['limit']) && is_numeric($_POST['limit'])) {
        $limit = (int) $_POST['limit'];
    } else {
        $limit = 100;
    }

    ?>


    


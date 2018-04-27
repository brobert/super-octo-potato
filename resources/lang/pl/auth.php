<?php
return [
    'form' => [
        'profile' => [
            'title' => 'Profil',
            'desc' => 'Dane osobiste',
            'field' => [
                'name' => 'Imię i nazwisko',
                'email' => 'e-mail',
                'phone' => 'nr telefonu'
            ]
        ],
        'password' => [
            'title' => 'Bezpieczeństwo',
            'desc' => 'Zmiana hasła',
            'field' => [
                'old_password' => 'Aktualne hasło',
                'password' => 'Nowe hasło',
                'password_confirm' => 'Potwierdź hasło'
            ]
        ],
        'label' => [
            'message' => 'Wiadomości',
            '' => ''
        ]
    ]
];
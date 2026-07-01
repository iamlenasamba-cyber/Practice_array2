<?php
// exo2
 $employes = [];
function initialiserEmployes(array &$employes): void
{
    $employes = [

        [
            "nom" => "Samba",
            "prenom" => "Omar",
            "matricule" => "236",

            "departement" => [
                "code" => "1234",
                "nom" => "Informatique"
            ],

            "subordonnes" => [
                0 => 2,
                1 => 4
            ]
        ],


        [
            "nom" => "Lena",
            "prenom" => "Diemdaba",
            "matricule" => "456",

            "departement" => [
                "code" => "6791",
                "nom" => "Architecture"
            ],

            "subordonnes" => [
                0 => 2,
                1 => 5
            ]
        ],


        [
            "nom" => "Diop",
            "prenom" => "Khadija",
            "matricule" => "786",

            "departement" => [
                "code" => "1234",
                "nom" => "Chimie"
            ],

            "subordonnes" => []
        ]

    ];
}

function departementArray(array $employes): array
{
    $departements = [];

    foreach ($employes as $employe) {

        $nomDepart = $employe["departement"]["nom"];

        $existe = false;

        foreach ($departements as $index => $departement) {

            if ($departement["nom"] == $nomDepart) {
                $existe = true;
                break;
            }
        }


        if (!$existe) {

            $departements[] = [
                "nom" => $nomDepart,
                "code" => $employe["departement"]["code"]
            ];

        }
    }


    return $departements;
}



initialiserEmployes($employes);
$departements = departementArray($employes);


print_r($departements);

?>
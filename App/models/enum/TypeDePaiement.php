<?php
enum TypeDePaiement
{
    case Promotion;
    case Liquidation;
    case Normal;
}

function do_stuff(TypeDePaiement $typeDePaiement)
{
    // ...
}

do_stuff(TypeDePaiement::TypeDePaiement);
?>
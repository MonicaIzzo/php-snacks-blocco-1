<?php

$nome = $_GET['nome'] ?? '';
$email = $_GET['email'] ?? '';
$eta = $_GET['eta'] ?? '';

$is_nome_valid = mb_strlen(trim($nome)) > 3;
$is_email_valid = str_contains($email, '.') && str_contains($email, '@');
$is_eta_valid = is_numeric($eta) && $eta > 0;

$is_from_valid = !$is_nome_valid || !$is_email_valid || !$is_eta_valid;

echo $is_from_valid ? 'Accesso negato' : 'Accesso riuscito';

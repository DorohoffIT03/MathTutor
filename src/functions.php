<?php

session_start();

function redirect(string $path) {
    header("Location: $path");
    die();
}

function mEroor(string $fieldName) {
    echo isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '' ;
}

function getErrorMsg(string $fieldName) {
    echo $_SESSION['validation'][$fieldName] ?? '';
}

function validationError(string $fieldName): bool {
    return isset($_SESSION['validation'][$fieldName]);
}

function addValidationError(string $fieldName, string $message) {
    $_SESSION['validation'][$fieldName] = $message;
}

function dieValidation() {
    $_SESSION['validation'] = [];
}

function gerAvatar(string $avatarPath) {
    
}


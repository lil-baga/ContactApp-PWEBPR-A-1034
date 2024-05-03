<?php

// Auth
// route('login', 'get', 'AuthController::login');
// route('login', 'post', 'AuthController::sessionLogin');
// route('register', 'get', 'AuthController::register');
// route('register', 'post', 'AuthController::newRegister');
// route('logout', 'get', 'AuthController::logout');


// Dashboard
// route('dashboard', 'get', 'DashboardController::index');
// route('dashboard/add-contact', 'post', 'ContactController::createContact');
// route('dashboard/edit-contact', 'post', 'ContactController::updateContact');
// route('dashboard/delete-contact', 'post', 'ContactController::deleteContact');


route('/', 'get', function () {
    echo ('Hello World!');
});

// User Auth
route('login', 'get', 'UserController::login_index');
route('login', 'post', 'UserController::login');
route('register', 'get', 'UserController::register_index');
route('register', 'post', 'UserController::register');
route('logout', 'get', 'UserController::logout');

//Home Contact App
route('home', 'get', 'ContactController::index');
route('add', 'get', 'ContactController::add');
route('edit', 'get', 'ContactController::edit');
route('add', 'post', 'ContactController::create');
route('edit', 'post', 'ContactController::update');
route('delete', 'post', 'ContactController::delete');
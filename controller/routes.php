<?php

Router::url('/', 'get', function () {
    echo ('Hello World!');
});

// User Auth
Router::url('login', 'get', 'UserController::login_index');
Router::url('login', 'post', 'UserController::login');
Router::url('register', 'get', 'UserController::register_index');
Router::url('register', 'post', 'UserController::register');
Router::url('logout', 'get', 'UserController::logout');

//Home Contact App
Router::url('dashboard', 'get', 'ContactController::index');
Router::url('add', 'get', 'ContactController::add');
Router::url('edit', 'get', 'ContactController::edit');
Router::url('add', 'post', 'ContactController::create');
Router::url('edit', 'post', 'ContactController::update');
Router::url('delete', 'post', 'ContactController::delete');
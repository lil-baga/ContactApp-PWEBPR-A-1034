<?php
include_once 'model/contact.php';
include_once 'function/main.php';
include_once 'config/static.php';

class ContactController
{
    static function index(){
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login');
            exit;
        }
        else {
            view('contact/layout', ['url'=>'dashboard', 'contacts' => Contact::getContacts($_SESSION['user']['id'])]);
        }
    }
    static function add(){
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login');
            exit;
        }
        else {
            view('contact/layout',['url'=>'create']);
        }
    }
    static function edit(){
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login');
            exit;
        }
        else {
            view('contact/layout', ['url'=>'edit', 'contacts' => Contact::getById($_GET['id'])]);
        }
    }
    static function create()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::create([
                'phone_number' => $post['phone_number'],
                'owner' => $post['owner'],
                'users_id' => $_SESSION['user']['id']
            ]);

            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function update()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::update([
                'id' => $post['id'],
                'phone_number' => $post['phone_number'],
                'owner' => $post['owner'],
                'users_id' => $_SESSION['user']['id'],
            ]);
            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function delete()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::delete($_POST['id']);
            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }
}
<?php
namespace App\Services;

abstract class BaseService{

    /**
     * Check if a user is logged in
     * @return bool
     */
    protected function isLoggedIn() : bool
    {
        return session()->has('EP_LOGIN');
    }

    protected function uploadImage($image) : string
    {
        return 'cover_photo.jpg';
    }
}

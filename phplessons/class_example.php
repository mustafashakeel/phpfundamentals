<?php
class User
{
    private $is_admin = false;
    private function has_admin_access()
    {
        return $this->is_admin;
    }
    public function access_level()
    {
        return $this->has_admin_access() ? 'admin' : 'standard';
    }
}

$user = new User;

echo $user->access_level();
// echo $user->is_admin;

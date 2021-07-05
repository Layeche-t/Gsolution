<?php

class Fixtures  extends AbstractDataBase
{
    private  const USERS = 'users';
    private  const POST = 'post';

    public function setUsers()
    {
        $now = new DateTime();
        $this->set([
            'firstname' => 'fateh', 'lastname' => 'tourki', 'password' => 'test',
            'role' => 'user',
            'sexe' => 0,
            'email' => 'test@test.com'
        ], self::USERS);
    }
}

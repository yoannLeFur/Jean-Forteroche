<?php

namespace App\src\DAO;

use App\config\Parameter;

class UserDAO extends DAO {

    public function login(Parameter $post)
    {
        $sql = 'SELECT id, email, password FROM blog_jf_user WHERE email = ?';
        $data = $this->createQuery($sql, [$post->get('email')]);
        $result = $data->fetch();
        $isPasswordValid = password_verify($post->get('password'), $result['password']);
        return [
            'result' => $result,
            'isPasswordValid' => $isPasswordValid
        ];
    }

}
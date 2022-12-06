<?php

namespace App\Repositories;


class Posts extends GuzzleHttpRequest
{

    public function all($token)
    {
        // return $this->get("posts");
        return $this->get("users/{$token}");

    }


    public function find($token, $id)
    {
        // return $this->get("/posts/{$id}");
        return $this->get("users/{$token}/posts/{$id}");

    }

}

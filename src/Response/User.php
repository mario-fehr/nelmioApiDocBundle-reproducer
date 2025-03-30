<?php

namespace App\Response;

use Symfony\Component\Serializer\Attribute\Groups;
#use JMS\Serializer\Annotation\Groups;

class User
{
    public function __construct(
        #[Groups([SerializerGroups::PUBLIC])]
        public int $id,
        #[Groups([SerializerGroups::PUBLIC])]
        public string $name,
        #[Groups([SerializerGroups::PRIVATE])]
        public string $email,
    ) {}
}

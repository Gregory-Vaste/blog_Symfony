<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Factory\UserFactory;
use App\Factory\PostsFactory;
use App\Factory\CommentsFactory;
use function Zenstruck\Foundry\faker;
use Doctrine\Persistence\ObjectManager;

use Symfony\Component\Validator\Constraints\Date;
use Doctrine\Bundle\FixturesBundle\Fixture as Fixture;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        UserFactory::createMany(15);
        UserFactory::createOne(['email' => 'admin@admin.com', 'password' => 'root']);
        UserFactory::createOne(['email' => 'user@user.com', 'password' => 'root']);

        PostsFactory::createMany(50);
        // CommentsFactory::createMany(50);

        CommentsFactory::createMany(20, function () {
            $randomPost = PostsFactory::random();
            return [
                'autor' => UserFactory::random(),
                'description' => faker()->realText(100),
                'post' => $randomPost,
                'date' => faker()->datetime()

            ];
        });
    }
}

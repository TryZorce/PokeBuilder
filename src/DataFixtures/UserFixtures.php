<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $adminUser = new User();
        $adminUser->setEmail('christopher.moron@gmail.com');
        $adminUser->setRoles(['ROLE_ADMIN']);
        $adminUser->setUsername('TryZorce');
        $adminUser->setPassword('$2y$13$e1Bonmy.EezUlCaXHZsixuQd.VukiYdaHITsRTt3O4kWU1lYxIvrq');
        $manager->persist($adminUser);
        

        $defaultUser = new User();
        $defaultUser->setEmail('antoine.clea@gmail.com');
        $defaultUser->setRoles(['ROLE_USER']);
        $defaultUser->setUsername('Undice');
        $defaultUser->setPassword('$2y$13$eooT18V8NJUKUJjd3kyuPeO2iHwtbu2N8yysWXrS0LzOU.H2h/zEC');
        $manager->persist($defaultUser);

        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setRoles(['ROLE_USER']);
            $user->setUsername($faker->userName);
            $password = $faker->password;
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $user->setPassword($hashedPassword);
            $manager->persist($user);
        }


        $manager->flush();
    }
}

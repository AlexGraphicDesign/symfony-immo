<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\Entity\ProgramDetails;
use App\Enum\Program\Status;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProgramFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 20; ++$i) {
            $program = (new Program())
                ->getUuid()
                ->setName($faker->words(5, true))
                ->setTitle($faker->words(6, true))
                ->setSlug($faker->slug)
                ->setDescription($faker->text(60))
                ->setFeaturedImage($faker->imageUrl(400, 250, 'animals', true, 'cats'))
                ->setExcerpt($faker->text(60))
                ->setContent($faker->paragraphs(3, true))
                ->setActability(\DateTimeImmutable::createFromMutable($faker->dateTimeBetween('+6 months', '+1 year')))
                ->setAddress($faker->streetAddress)
                ->setLatitude($faker->latitude)
                ->setLongitude($faker->longitude)
                ->setIndexable($faker->boolean)
                ->setCreatedAt(\DateTimeImmutable::createFromMutable($faker->dateTimeBetween('-2 years', '-1 year')))
                ->setUpdatedAt(\DateTimeImmutable::createFromMutable($faker->dateTimeBetween('-1 year', 'now')))
                ->setStatus($faker->randomElement([Status::DRAFT, Status::PUBLISHED, Status::ARCHIVED]));

            $programDetails = (new ProgramDetails())
                ->getUuid()
                ->setProgram($program)
                ->setConstructionStart(\DateTimeImmutable::createFromMutable($faker->dateTimeBetween('-6 months', 'now')))
                ->setConstructionEnd(\DateTimeImmutable::createFromMutable($faker->dateTimeBetween('now', '+6 months')))
                ->setDelivery(\DateTimeImmutable::createFromMutable($faker->dateTimeBetween('+1 year', '+2 years')))
                ->setUrlPromoter($faker->url);

            $manager->persist($program);
            $manager->persist($programDetails);
        }

        $manager->flush();
    }
}

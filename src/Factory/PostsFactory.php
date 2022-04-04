<?php

namespace App\Factory;

use App\Entity\Posts;
use App\Repository\PostsRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Posts>
 *
 * @method static Posts|Proxy createOne(array $attributes = [])
 * @method static Posts[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Posts|Proxy find(object|array|mixed $criteria)
 * @method static Posts|Proxy findOrCreate(array $attributes)
 * @method static Posts|Proxy first(string $sortedField = 'id')
 * @method static Posts|Proxy last(string $sortedField = 'id')
 * @method static Posts|Proxy random(array $attributes = [])
 * @method static Posts|Proxy randomOrCreate(array $attributes = [])
 * @method static Posts[]|Proxy[] all()
 * @method static Posts[]|Proxy[] findBy(array $attributes)
 * @method static Posts[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Posts[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static PostsRepository|RepositoryProxy repository()
 * @method Posts|Proxy create(array|callable $attributes = [])
 */
final class PostsFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'name' => implode('', self::faker()->words(rand(1, 6))),
            'description' => self::faker()->realText(100),
            'date' => self::faker()->datetime(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Posts $posts): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Posts::class;
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Member;
use App\Models\Publisher;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1,
            'name' => 'Dzaki Al',
            'email' => 'dzakial@example.com',
            'password' => 'dzakial123.'
        ]);

        Author::factory()->create([
            'id' => 1,
            'name' => 'Dzaki Al',
            'nationality' => 'Indonesia'
        ]);

        Author::factory()->create([
            'name' => 'Ian Fleming',
            'nationality' => 'United Kingdoms'
        ]);

        Author::factory()->create([
            'name' => 'Gege Akutami',
            'nationality' => 'Japan'
        ]);

        Author::factory()->create([
            'name' => 'Tatsuya Endo',
            'nationality' => 'Japan'
        ]);

        Author::factory()->create([
            'name' => 'Philip K. Dick', 
            'nationality' => 'USA'
        ]);

        Author::factory()->create([
            'name' => 'Hajime Komoto',
            'nationality' => 'Japan'
        ]);

        Book::factory()->create([
            'title' => 'Do Android Dreams of Electric Sheep?',
            'author' => 'Philip K. Dick',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2020-01-01',
            'genre' => 'Sci-Fi',
            'number_of_copies' => 10
        ]);

        Book::factory()->create([
            'title' => 'Jujutsu Kaisen Vol.1 EN Ver',
            'author' => 'Gege Akutami',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2022-05-25',
            'genre' => 'Action',
            'number_of_copies' => 10
        ]);

        Book::factory()->create([
            'title' => 'Jujutsu Kaisen Vol.2 EN Ver',
            'author' => 'Gege Akutami',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2022-05-25',
            'genre' => 'Action',
            'number_of_copies' => 10
        ]);

        Book::factory()->create([
            'title' => 'Spy x Family Vol.1 EN Ver',
            'author' => 'Tatsuya Endo',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2021-01-01',
            'genre' => 'Comedy',
            'number_of_copies' => 10
        ]);

        Book::factory()->create([
            'title' => 'Spy x Family Vol.2 EN Ver',
            'author' => 'Tatsuya Endo',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2021-01-01',
            'genre' => 'Comedy',
            'number_of_copies' => 10
        ]);

        Book::factory()->create([
            'title' => 'Mashle Vol.1 EN Ver',
            'author' => 'Hajime Komoto',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2023-07-07',
            'genre' => 'Action',
            'number_of_copies' => 10
        ]);

        Book::factory()->create([
            'title' => 'Mashle Vol.2 EN Ver',
            'author' => 'Hajime Komoto',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2023-07-07',
            'genre' => 'Action',
            'number_of_copies' => 10
        ]);

        Book::factory()->create([
            'title' => 'Is Technology Dangerous?',
            'author' => 'Dzaki Al',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2024-01-01',
            'genre' => 'Technology',
            'number_of_copies' => 10
        ]);

        Book::factory()->create([
            'title' => 'Can AI Take Over World?',
            'author' => 'Dzaki Al',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2024-03-01',
            'genre' => 'Technology',
            'number_of_copies' => 10
        ]);

        Book::factory()->create([
            'title' => 'Casino Royale',
            'author' => 'Ian Fleming',
            'publisher' => 'Eternal Books Inc.',
            'publication_date' => '2020-03-01',
            'genre' => 'Action',
            'number_of_copies' => 10
        ]);

        Genre::factory()->create([
            'genre' => 'Action',
        ]);

        Genre::factory()->create([
            'genre' => 'Comedy',
        ]);

        Genre::factory()->create([
            'genre' => 'Sci-Fi',
        ]);

        Genre::factory()->create([
            'genre' => 'Technology',
        ]);

        Member::factory()->create([
            'name' => 'Wriothesley',
            'email' => 'wriothesley@example.com',
            'address' => 'Wriothesley Apt 2, 1257 Avenue Street San Francisco California USA',
            'phone' => '555444333'
        ]);

        Member::factory()->create([
            'name' => 'Diluc Ragnvindr',
            'email' => 'ragnvindr@example.com',
            'address' => 'Diluc Ragnvindr Apt 10, 1257 Avenue Street San Francisco California USA',
            'phone' => '333222111'
        ]);

        Member::factory()->create([
            'name' => 'Neuvillette',
            'email' => 'neuvillette@example.com',
            'address' => 'Neuvillette Apt 50, 1555 Main Street San Francisco California USA',
            'phone' => '332555111'
        ]);

        Member::factory()->create([
            'name' => 'Clorinde',
            'email' => 'clorinde@example.com',
            'address' => 'Clorinde 1578 Spring Street San Francisco California USA',
            'phone' => '111252757'
        ]);

        Member::factory()->create([
            'name' => 'Kafka',
            'email' => 'kafka@example.com',
            'address' => 'Kafka 1045 Winter Street San Francisco California USA',
            'phone' => '656777808'
        ]);

        Member::factory()->create([
            'name' => 'Dan Heng',
            'email' => 'danheng@example.com',
            'address' => 'Dan Heng 1000 Spring Street San Francisco California USA',
            'phone' => '111222333'
        ]);

        Publisher::factory()->create([
            'name' => 'Eternal Books Inc.',
            'address' => 'Eternal Books Inc. Cold Steet New York USA',
            'email' => 'eternalbooks@eternal.com'
        ]);
    }
}

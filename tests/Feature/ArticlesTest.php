<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticlesTest extends TestCase
{
    use RefreshDatabase;

    public function test_main_page_has_articles()
    {
        /**
         * Если на сайте создана статья
         */
        $article = Article::factory()
            ->create(['title' => 'example'])
        ;

        /**
         * То, когда пользователь заходит на главную страницу
         */
        $response = $this->get('/');

        /**
         * Страница ДОЛЖНА открыться,
         * и контент страницы ДОЛЖЕН содержать название этой статьи
         */
        $response
            ->assertStatus(200)
            ->assertSee($article->title)
        ;
    }
}

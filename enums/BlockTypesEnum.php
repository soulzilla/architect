<?php

namespace app\enums;

class BlockTypesEnum
{
    const WELCOME_TEXT = 1;
    const DONE_PROJECTS = 2;
    const SERVICES_TEXT = 3;
    const BLOG_TEXT = 4;
    const TEAM_TEXT = 5;
    const SUBSCRIBE_TEXT = 6;
    const ABOUT_SMALL_TEXT = 7;
    const ABOUT_FULL_TEXT = 8;

    public static function labels()
    {
        return [
            self::WELCOME_TEXT => 'Приветственный текст',
            self::DONE_PROJECTS => 'Завершённые проекты',
            self::SERVICES_TEXT => 'Услуги',
            self::BLOG_TEXT => 'Блог>',
            self::TEAM_TEXT => 'Команда',
            self::SUBSCRIBE_TEXT => 'Подписка',
            self::ABOUT_SMALL_TEXT => 'О компании (в подвале)',
            self::ABOUT_FULL_TEXT => 'О компании (страница)'
        ];
    }

    public static function titles()
    {
        return [
            self::WELCOME_TEXT => '<span class="thin">Secrets of Success</span> <span class="thick">of Our Projects</span>',
            self::DONE_PROJECTS => '<span class="thin">Our Done</span> <span class="thick">Projects</span>',
            self::SERVICES_TEXT => '<span class="thin">We Offer</span> <span class="thick">Services</span>',
            self::BLOG_TEXT => '<span class="thin">Read</span> <span class="thick">Our Blog</span>',
            self::TEAM_TEXT => '<span class="thin">Our</span> <span class="thick">Engineers</span>',
            self::SUBSCRIBE_TEXT => 'Sign up for a Newsletter',
            self::ABOUT_SMALL_TEXT => 'ABOUT COMPANY',
            self::ABOUT_FULL_TEXT => 'Welcome to our Company'
        ];
    }

    public static function contents()
    {
        return [
            self::WELCOME_TEXT => 'Since 1980 Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.',
            self::DONE_PROJECTS => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name',
            self::SERVICES_TEXT => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name',
            self::BLOG_TEXT => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name',
            self::TEAM_TEXT => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name',
            self::SUBSCRIBE_TEXT => 'Enter your email address to get the latest news, events and special offers delivered right to your inbox.',
            self::ABOUT_SMALL_TEXT => 'Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics',
            self::ABOUT_FULL_TEXT => 'On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.'
        ];
    }
}

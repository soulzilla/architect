<?php

use app\enums\BlockTypesEnum;
use app\models\Banners;
use app\models\Blocks;
use app\models\Contacts;
use app\models\Groups;
use app\models\Pages;
use app\models\Services;
use app\models\Testimonials;
use app\models\Workers;
use yii\db\Migration;

/**
 * Class m210425_132734_add_table_data
 */
class m210425_132734_add_table_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createBanners();
        $this->createBlocks();
        $this->createGroups();
        $this->createServices();
        $this->createWorkers();
        $this->createTestimonials();
        $this->createPages();
        $this->createContacts();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

    private function createBanners()
    {
        $banner = new Banners();
        $banner->title = 'Constructing Spaces For You';
        $banner->content = 'PROVIDING ALL KINDS OF CONSTRUCTION SERVICES';
        $banner->image = '/images/img_bg_1.jpg';
        $banner->weight = 1;
        $banner->save();

        $banner = new Banners();
        $banner->title = 'High Class Building';
        $banner->content = 'BUILDING YOUR SOLID';
        $banner->image = '/images/img_bg_2.jpg';
        $banner->weight = 2;
        $banner->save();

        $banner = new Banners();
        $banner->title = 'We Build Buildings Professionally';
        $banner->content = 'WE DESIGN ALL KINDS OF BUILDINGS';
        $banner->image = '/images/img_bg_3.jpg';
        $banner->weight = 3;
        $banner->save();
    }

    private function createBlocks()
    {
        foreach (BlockTypesEnum::labels() as $type => $label) {
            $block = new Blocks();
            $block->type = $type;
            $block->title = BlockTypesEnum::titles()[$type];
            $block->content = BlockTypesEnum::contents()[$type];
            $block->save();
        }
    }

    private function createGroups()
    {
        $group = new Groups();
        $group->name = 'Commercial';
        $group->weight = 1;
        $group->save();

        $group = new Groups();
        $group->name = 'Apartments';
        $group->weight = 2;
        $group->save();

        $group = new Groups();
        $group->name = 'House';
        $group->weight = 3;
        $group->save();

        $group = new Groups();
        $group->name = 'Building';
        $group->weight = 4;
        $group->save();
    }

    private function createServices()
    {
        $service = new Services();
        $service->name = 'General Constructing';
        $service->description = 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies';
        $service->icon = 'flaticon-engineer';
        $service->weight = 1;
        $service->save();

        $service = new Services();
        $service->name = 'Building Modeling';
        $service->description = 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies';
        $service->icon = 'flaticon-engineering';
        $service->weight = 2;
        $service->save();

        $service = new Services();
        $service->name = 'Design Build';
        $service->description = 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies';
        $service->icon = 'flaticon-skyline';
        $service->weight = 3;
        $service->save();

        $service = new Services();
        $service->name = 'Construction Services';
        $service->description = 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies';
        $service->icon = 'flaticon-crane';
        $service->weight = 4;
        $service->save();

        $service = new Services();
        $service->name = 'Pre-Construction Design';
        $service->description = 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies';
        $service->icon = 'flaticon-sketch';
        $service->weight = 5;
        $service->save();

        $service = new Services();
        $service->name = 'Construction Management';
        $service->description = 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies';
        $service->icon = 'flaticon-conveyor';
        $service->weight = 6;
        $service->save();
    }

    private function createWorkers()
    {
        $worker = new Workers();
        $worker->full_name = 'John Miller';
        $worker->position = 'Lead Engineer';
        $worker->quote = 'Even the all-powerful Pointing has no control about the blind texts';
        $worker->image = '/images/person1.jpg';
        $worker->weight = 1;
        $worker->save();

        $worker = new Workers();
        $worker->full_name = 'Brian Smith';
        $worker->position = 'Architect';
        $worker->quote = 'Even the all-powerful Pointing has no control about the blind texts';
        $worker->image = '/images/person2.jpg';
        $worker->weight = 2;
        $worker->save();

        $worker = new Workers();
        $worker->full_name = 'Andrew Clinton';
        $worker->position = 'Architect';
        $worker->quote = 'Even the all-powerful Pointing has no control about the blind texts';
        $worker->image = '/images/person3.jpg';
        $worker->weight = 3;
        $worker->save();
    }

    private function createTestimonials()
    {
        $testimonial = new Testimonials();
        $testimonial->full_name = 'Andrew Field';
        $testimonial->content = 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.';
        $testimonial->image = '/images/person1.jpg';
        $testimonial->weight = 1;
        $testimonial->save();

        $testimonial = new Testimonials();
        $testimonial->full_name = 'Mark Bubble';
        $testimonial->content = 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.';
        $testimonial->image = '/images/person2.jpg';
        $testimonial->weight = 2;
        $testimonial->save();

        $testimonial = new Testimonials();
        $testimonial->full_name = 'Adam Smith';
        $testimonial->content = 'Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.';
        $testimonial->image = '/images/person3.jpg';
        $testimonial->weight = 3;
        $testimonial->save();
    }

    private function createPages()
    {
        $page = new Pages();
        $page->title = 'Certification';
        $page->content = '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."';
        $page->image = '/images/img_bg_1.jpg';
        $page->save();

        $page = new Pages();
        $page->title = 'Career';
        $page->content = '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."';
        $page->image = '/images/img_bg_1.jpg';
        $page->save();

        $page = new Pages();
        $page->title = 'Core Values';
        $page->content = '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."';
        $page->image = '/images/img_bg_1.jpg';
        $page->save();

        $page = new Pages();
        $page->title = 'Company History';
        $page->content = '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."';
        $page->image = '/images/img_bg_1.jpg';
        $page->save();
    }

    private function createContacts()
    {
        $contact = new Contacts();
        $contact->type = 1;
        $contact->content = '+ 1235 2355 98';
        $contact->weight = 1;
        $contact->save();

        $contact = new Contacts();
        $contact->type = 2;
        $contact->content = 'info@yoursite.com';
        $contact->weight = 2;
        $contact->save();

        $contact = new Contacts();
        $contact->type = 3;
        $contact->content = '291 South 21th Street, Suite 721 New York NY 10016';
        $contact->weight = 3;
        $contact->save();
    }
}

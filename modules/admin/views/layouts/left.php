<?php
/* @var $this \yii\web\View */
/* @var $content string */
/* @var $directoryAsset string */
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Banners', 'icon' => 'file-code-o', 'url' => ['/admin/banners/index']],
                    ['label' => 'Blocks', 'icon' => 'file-code-o', 'url' => ['/admin/blocks/index']],
                    ['label' => 'Groups', 'icon' => 'file-code-o', 'url' => ['/admin/groups/index']],
                    ['label' => 'Projects', 'icon' => 'file-code-o', 'url' => ['/admin/projects/index']],
                    ['label' => 'Services', 'icon' => 'file-code-o', 'url' => ['/admin/services/index']],
                    ['label' => 'Blog', 'icon' => 'file-code-o', 'url' => ['/admin/publications/index']],
                    ['label' => 'Workers', 'icon' => 'file-code-o', 'url' => ['/admin/workers/index']],
                    ['label' => 'Pages', 'icon' => 'file-code-o', 'url' => ['/admin/pages/index']],
                    ['label' => 'Contacts', 'icon' => 'file-code-o', 'url' => ['/admin/contacts/index']],
                    ['label' => 'Testimonials', 'icon' => 'file-code-o', 'url' => ['/admin/testimonials/index']],
                    ['label' => 'Subscribers', 'icon' => 'file-code-o', 'url' => ['/admin/subscribers/index']],
                    ['label' => 'Messages', 'icon' => 'file-code-o', 'url' => ['/admin/messages/index']],
                ],
            ]
        ) ?>
    </section>
</aside>

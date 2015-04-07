<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('post', new Route('/', array(
    '_controller' => 'TimelineBundle:Post:index',
)));

$collection->add('post_myposts', new Route('/{id}/myposts', array(
    '_controller' => 'TimelineBundle:Post:showPosts',
)));

$collection->add('create_new_post', new Route('/{id}/createNewPost', array(
    '_controller' => 'TimelineBundle:Post:createNewPost',
)));


$collection->add('post_show', new Route('/{id}/show', array(
    '_controller' => 'TimelineBundle:Post:show',
)));

$collection->add('post_show_post', new Route('/{id}/show_post', array(
    '_controller' => 'TimelineBundle:Post:showSelectedPost',
)));

$collection->add('post_new', new Route('/new', array(
    '_controller' => 'TimelineBundle:Post:new',
)));

$collection->add('post_create', new Route(
    '/create',
    array('_controller' => 'TimelineBundle:Post:create'),
    array('_method' => 'post')
));

$collection->add('post_edit', new Route('/{id}/edit', array(
    '_controller' => 'TimelineBundle:Post:edit',
)));

$collection->add('post_update', new Route(
    '/{id}/update',
    array('_controller' => 'TimelineBundle:Post:update'),
    array('_method' => 'post|put')
));

$collection->add('post_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'TimelineBundle:Post:delete'),
    array('_method' => 'post|delete')
));

return $collection;

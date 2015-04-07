<?php

namespace Zeta\TimelineBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Zeta\TimelineBundle\Entity\Post;
use Zeta\TimelineBundle\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Post controller.
 *
 */
class PostController extends Controller {

    /**
     * Lists all Post entities.
     *
     */
//    public function indexAction() {
//        $em = $this->getDoctrine()->getManager();
//
//        $entities = $em->getRepository('TimelineBundle:Post')->findAll();
//
//        return $this->render('TimelineBundle:Post:index.html.twig', array(
//                    'entities' => $entities,
//        ));
//    }



    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();

//        $qb->select('p')
//                ->from('TimelineBundle:Post', 'p')    
//                ->orderBy('p.date', 'DESC')
//                ->addOrderBy('p.time', 'DESC');
//        
//
//        $entities = $qb->getQuery()->getArrayResult();

        $query = $em->createQuery(
                        'SELECT u.username, p.id, p.text, p.image, p.date, p.time
                        FROM TimelineBundle:Post p
                        INNER JOIN UserBundle:User u WITH u = p.user
                        ORDER BY p.date DESC, p.time DESC'
                );

        $entities = $query->getArrayResult();

        return $this->render('TimelineBundle:Post:index.html.twig', array(
                    'entities' => $entities,
        ));
    }
    
    

    public function uploadAction(Request $request) {
        echo 'upload action';
        $post = new Post();
        $form = $this->createFormBuilder($post)
                ->add('image')
                ->add('file')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $dir = asset('bundles/timeline/images');
            echo $dir;
            $form['image']->getData()->move($dir, $file->getClientOriginalName());
            $em = $this->getDoctrine()->getManager();
            $this->upload();
            $em->persist($post);
            $em->flush();

            return $this->redirect($this->generateUrl('post_show', array('id' => $entity->getId())));
        }
        return array('form' => $form->createView());
    }

    public function upload(Post $entity) {
        echo 'upload';
        // the file property can be empty if the field is not required
        if (null === $entity->getFile()) {
            return;
        }
        echo 'last upload';
        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and then the
        // target filename to move to
        $entity->getFile()->move(
                $entity->getUploadRootDir(), $entity->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
//        $this->image = $entity->getFile()->getClientOriginalName();
        $entity->setImage($entity->getFile()->getClientOriginalName());

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

    /**
     * Creates a new Post entity.
     *
     */
    public function createAction(Request $request) {
        echo 'create action';
        $entity = new Post();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entity->setDate(date_create());            /////////////////////////////////////
            $entity->setTime(date_create());

            $entity->setUser($this->getUser());

            $em = $this->getDoctrine()->getManager();

            $entity->setFile($form['image']->getData());

            $this->upload($entity);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('post_show', array('id' => $entity->getId())));
        }

        return $this->render('TimelineBundle:Post:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Post entity.
     *
     * @param Post $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Post $entity) {
        $form = $this->createForm(new PostType(), $entity, array(
            'action' => $this->generateUrl('post_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Post entity.
     *
     */
    public function newAction() {
        $entity = new Post();
        $form = $this->createCreateForm($entity);

        return $this->render('TimelineBundle:Post:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Post entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TimelineBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TimelineBundle:Post:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function showPostsAction($id) {

        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();

        $qb->select('p')
                ->from('TimelineBundle:Post', 'p')
                ->where('p.user = :id')
                ->orderBy('p.date', 'DESC')
                ->addOrderBy('p.time', 'DESC')
                ->setParameters(array('id' => $id));

        $entities = $qb->getQuery()->getArrayResult();

        return $this->render('TimelineBundle:Post:myposts.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function showSelectedPostAction($id) {
        
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TimelineBundle:Post')->find($id);
        
        
        $query = $em->createQuery(
                        "SELECT u.username
                        FROM TimelineBundle:Post p
                        INNER JOIN UserBundle:User u WITH u = p.user
                        WHERE p.id = '".$id."'"
                );

        $user = $query->getArrayResult();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TimelineBundle:Post:show_post.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'user' => $user
        ));
    }

    /**
     * Displays a form to edit an existing Post entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TimelineBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);



        return $this->render('TimelineBundle:Post:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Post entity.
     *
     * @param Post $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Post $entity) {

        $form = $this->createForm(new PostType(), $entity, array(
            'action' => $this->generateUrl('post_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Post entity.
     *
     */
    public function updateAction(Request $request, $id) {



        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TimelineBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);



        if ($editForm->isValid()) {

            $entity->setDate(date_create());
            $entity->setTime(date_create());

            ////////////////////////////////////////////

            $entity->setFile($editForm['image']->getData());

            $this->upload($entity);

            $em->persist($entity);

            ////////////////////////////////////////////

            $em->flush();

            return $this->redirect($this->generateUrl('post_show', array('id' => $id)));
        }



        return $this->render('TimelineBundle:Post:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));

//        return $this->showPostsAction( app.user.id );
    }

    /**
     * Deletes a Post entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TimelineBundle:Post')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Post entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('post'));
    }

    /**
     * Creates a form to delete a Post entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('post_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}

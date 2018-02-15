<?php

// src/WA/AnnonceBundle/Controller/AnnonceController.php

namespace WA\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AnnonceController extends Controller
{
	public function indexAction()
		{
			$url = $this->generateUrl('wa_annonce_view',array('id' => 6), UrlGeneratorInterface::ABSOLUTE_URL);
			$content = "L'URL de l'annonce id 6 est : <a href='".$url."'>".$url."</a></p>";
			$url = $this->generateUrl('wa_annonce_add',array(), UrlGeneratorInterface::ABSOLUTE_URL);
			$content .= "L'URL de l'ajout d'une annonce : <a href='".$url."'>".$url."</a></p>";
			$url = $this->generateUrl('wa_annonce_edit',array('id' => 6), UrlGeneratorInterface::ABSOLUTE_URL);
			$content .= "L'URL de modification de l'annonce id 6  : <a href='".$url."'>".$url."</a></p>";
			$url = $this->generateUrl('wa_annonce_delete',array('id' => 6), UrlGeneratorInterface::ABSOLUTE_URL);
			$content .= "L'URL de suppression de l'annonce id 6 : <a href='".$url."'>".$url."</a></p>";
				
			return new Response($content);
		}
	
	public function addAction()
		{
			return new Response("Formulaire d'ajout d'une annonce");
		}

	public function editAction($id)
		{
			return new Response("Formulaire d'edition de l'annonce d'id : ".$id);
		}
	
	public function deleteAction($id)
		{
			return new Response("Formulaire de suppression de l'annonce d'id : ".$id);
		}
	
	public function viewAction($id, Request $request)
		{
			// On récupère notre paramètre tag
			$tag = $request->query->get('tag');

			// On utilise le raccourci : il crée un objet Response
			// Et lui donne comme contenu le contenu du template
			return $this->render('WAAnnonceBundle:Annonce:view.html.twig', array(
			  'id'  => $id,
			  'tag' => $tag,
			));
		}
	
	 // On récupère tous les paramètres en arguments de la méthode
    public function viewSlugAction($slug, $year, $_format)
		{
			return new Response(
				"On pourrait afficher l'annonce correspondant au
				slug '".$slug."', créée en ".$year." et au format ".$_format."."
			);
		}
}

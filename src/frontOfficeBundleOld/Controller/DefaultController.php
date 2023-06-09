<?php

namespace frontOfficeBundle\Controller;

use backOfficeBundle\Entity\commande;
use backOfficeBundle\Entity\membre;
use backOfficeBundle\Entity\newsletter;
use backOfficeBundle\Entity\panier;
use backOfficeBundle\Entity\token;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;


class DefaultController extends Controller
{

    /**
     * @Route("/")
     * @Route("/index/")
     * @Template()
     */
    public function indexAction()
    {
        //---- NOUVEAUX PRODUITS-----//
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('backOfficeBundle:produitsite');
        $art = $repository->findBy(array(),array("id"=>"DESC"),8);

        $repository = $em->getRepository('backOfficeBundle:produit_info');
        $art1 = $repository->findBy(array(),array("id"=>"DESC"),8);



        $article = array();
        for($i=0;$i<count($art);$i++){
            $article[$i]["obj"] = $art[$i];

            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $art1[$i] = $repository->findOneBy(array("idProduit"=>$art[$i]->getId()),array("prix"=>"ASC"));

            $article[$i]["obj1"] = $art1[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $article[$i]["cat"]  = $repository->findOneById($art[$i]->getIdCategorie());

            $repository = $em->getRepository('backOfficeBundle:images');
            $img = $repository->findByIdProduct($art[$i]->getId());
            if($img){
                $article[$i]["img"] = $img[0]->getUrlimgmin();
            }
            else{
                $article[$i]["img"] = "/Bundle/ST/images/noimage.jpg";
            }
            if($art1[$i]->getNewPrix() !=0 && ( $art1[$i]->getNewPrix()< $art1[$i]->getPrix())){
                $article[$i]["prix"] = $art1[$i]->getNewPrix();
            }else{
                $article[$i]["prix"] = $art1[$i]->getPrix();
            }

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $color = $repository->findByIdProduct($art[$i]->getId());
            if($color){
                $article[$i]["color"] = $color[0]->getId();
            }
            else{
                $article[$i]["color"] = 0;
            }

        }

        //----PRODUITS EN PROMOTION -----//


        $repo = $this->getDoctrine()
            ->getManager()
            ->getRepository('backOfficeBundle:produit_info');
        $qb = $repo->createQueryBuilder('a');
        $qb->select('a');
        $qb->where(' a.prix > a.newPrix and a.newPrix > 0');
        $qb->orderBy('a.newPrix','ASC');
        $qb->groupBy('a.idProduit');
        $qb->setFirstResult( 0 );
        $qb->setMaxResults( 4 );
        $art = $qb->getQuery()->getResult();



        $promotion = array();
        for($i=0;$i<count($art);$i++){
            $promotion[$i]["obj"] = $art[$i];

            $repository = $em->getRepository('backOfficeBundle:produitsite');
            $promotion[$i]["obj1"]  = $repository->findOneById($art[$i]->getIdProduit());

            $repository = $em->getRepository('backOfficeBundle:images');
            $img = $repository->findByIdProduct($art[$i]->getIdProduit());
            if($img){
                $promotion[$i]["img"] = $img[0]->getUrlimgmin();
            }
            else{
                $promotion[$i]["img"] = "/Bundle/ST/images/noimage.jpg";
            }

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $color = $repository->findByIdProduct($art[$i]->getIdProduit());
            if($color){
                $promotion[$i]["color"] = $color[0]->getId();
            }
            else{
                $promotion[$i]["color"] = 0;
            }
        }

        //---------------PANIER--------------//

        $session = new Session();
        $panier = array();

        $petitpan = array();

        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }

        //-------AFFICHER LE slider

        $repository = $em->getRepository('backOfficeBundle:slider');
        $slider = $repository->findBy(array(),array("id"=>"ASC"));

        $repository = $em->getRepository('backOfficeBundle:video_slider');
        $videoSliders = $repository->findByActif(1);

        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new
        JsonEncoder()));
        $videoSlidersJson = $serializer->serialize($videoSliders, 'json');

        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        $repository = $em->getRepository('backOfficeBundle:siteWeb');
        $site = $repository->find(1);

        return $this->render('@frontOffice/Default/index.html.twig' ,array("article"=>$article,"promotion"=>$promotion,"npanier"=>$n,"connect"=>$connect,
            "pan"=>$petitpan,"slider"=>$slider,"videoSliders"=>$videoSliders,"videoSlidersJson"=>$videoSlidersJson,"catAff"=>$categorieAff,"s"=>$site));

    }

    /**
     * @Route("/auth/")
     * @Template()
     */
    public function authAction(Request $request)
    {
        $session = new Session();

        $panier = array();
        $petitpan = array();
        $response = "";
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU") && $session->get("connectU") == "OK"){
            return $this->Redirect('/mon-profil/');
        }
        else{
            $connect = "";
        }

        $urlFB = "";

        if($request->getMethod() == "POST"){
            if($request->get("formName") == "connect"){
                $email = $request->get("email");
                $password = md5($request->get("password"));
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:membre');
                $user = $repository->findOneBy(array("email"=>$email,"password"=>$password));

                if($user){

                    $session->set("connectU","OK");
                    $session->set("userU",$user);

                    //-------INITIALISATION DU PANIER--------//
                    $em = $this->getDoctrine()->getManager();
                    $repository = $em->getRepository('backOfficeBundle:commande');
                    $commande = $repository->findOneBy(array("idmembre"=>$user->getId(),"validationUser"=>0));
                    if($commande){
                        //-------Ajout de l'ancien panier et du nouveau-------//
                        $repository = $em->getRepository('backOfficeBundle:panier');
                        $pan = $repository->findBy(array("idCommande"=>$commande->getId()));
                        for($i=0;$i<count($pan);$i++){
                            if (array_key_exists($pan[$i]->getIdProduitsite(), $panier) == false) {
                                $panier[$pan[$i]->getIdProduitsite()."-".$pan[$i]->getIdColor()."-".$pan[$i]->getTitleTaille()."-".$pan[$i]->getValeurTaille()] = $pan[$i];

                                //-----mettre  les articles dans  le petit panier

                                $repository = $em->getRepository('backOfficeBundle:produitsite');
                                $t = $repository->findOneById($pan[$i]->getIdProduitsite());
                                $repository = $em->getRepository('backOfficeBundle:images');
                                $img = $repository->findByIdProduct($pan[$i]->getIdProduitsite());
                                if($img){
                                    $petitpan[$pan[$i]->getIdProduitsite()]['img'] = $img[0]->getUrlImgMin();
                                }
                                $petitpan[$pan[$i]->getIdProduitsite()]['produit'] = $t;
                            }
                        }

                        $total = 0;
                        foreach ($panier as $p){


                                $repository = $em->getRepository('backOfficeBundle:panier');
                                $pan = $repository->findOneBy(array("idProduitsite"=>$p->getIdProduitsite(),"idCommande"=>$commande->getId(),"idColor"=>$p->getIdColor(),"titleTaille"=>$p->getTitleTaille(),"valeurTaille"=>$p->getValeurTaille()));

                            if($pan){
                                $q1 = $p->getQuantite();
                                $pan->setQuantite($q1);
                                $em->flush();
                            }
                            else{
                                $p->setIdCommande($commande->getId());
                                $em->persist($p);
                                $em->flush();
                            }

                            $em = $this->getDoctrine()->getManager();
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findOneById($p->getIdProduitsite());
                            $q = $p->getQuantite();

                            $repository = $em->getRepository('backOfficeBundle:produit_info');
                            $article1 = $repository->findOneByIdProduit($p->getIdProduitsite());


                            if($article1->getNewPrix() !=0 && ( $article1->getNewPrix()< $article1->getPrix())){
                                $pr = $article1->getNewPrix();
                            }else{
                                $pr = $article1->getPrix();
                            }
                            $total = $total + ($pr*$q);

                        }

                        $commande->setTotal($total);
                        $em->flush();

                        $session->set("panier",$panier);
                        $session->set("petitpan",$petitpan);
                        $session->set("commande",$commande->getId());
                    }
                    else{
                        $commande = new Commande();
                        $commande->setDateCommande(new\DateTime());
                        $commande->setIdMembre($user->getId());
                        $commande->setTotal(0);
                        $commande->setValidation(0);
                        $commande->setValidationUser(0);
                        $commande->setLivraison(0);
                        $commande->setMtLivraison(0);
                        $commande->setetatPaiment(0);
                        $commande->setModePaiment(0);
                        $commande->setResponseCMI	(0);
                        $commande->setNote	(0);

                        $em->persist($commande);
                        $em->flush();

                        $total = 0;
                        foreach ($panier as $p){
                            $em = $this->getDoctrine()->getManager();
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findOneById($p->getIdProduitsite());
                            $q = $p->getQuantite();


                            $repository = $em->getRepository('backOfficeBundle:produit_info');
                            $article1 = $repository->findOneByIdProduit($p->getIdProduitsite());


                            if($article1->getNewPrix() !=0 && ( $article1->getNewPrix()< $article1->getPrix())){
                                $pr = $article1->getNewPrix();
                            }else{
                                $pr = $article1->getPrix();
                            }

                            $total = $total + ($pr*$q);
                            $p->setIdCommande($commande->getId());
                            $em->persist($p);
                            $em->flush();
                        }
                        $commande->setTotal($total);
                        $em->flush();

                        $session->set("commande",$commande->getId());
                    }
                    return $this->Redirect('/index/');
                }
                else{
                    $response = "Email ou mot de passe incorrect";
                }
            }
        }
        $em = $this->getDoctrine()->getManager();
        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }

        return $this->render('@frontOffice/Default/auth.html.twig',array("npanier"=>$n,"response"=>$response,"connect"=>$connect,"pan"=>$petitpan,"urlFB"=>$urlFB,"catAff"=>$categorieAff));

    }

    /**
     * @Route("/test/")
     * @Template()
     */
    public function testAction(Request $request)
    {

        //-------MARQUE-----------//

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('backOfficeBundle:marques');
        $marque = $repository->findAll();
        //--------CAT ET SOUSCAT

        $article = null;

        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }

        $key = $request->get('key');

        $repo = $this->getDoctrine()
            ->getManager()
            ->getRepository('backOfficeBundle:produitsite');
        $qb = $repo->createQueryBuilder('n');
        $qb->select('n')
            ->where('n.titre LIKE :key ' )
            ->setParameter('key', '%'.$key.'%');
        $article = $qb->getQuery()->getResult();



        $articles = array();
        for($i=0;$i<count($article);$i++){
            $articles[$i]["obj"] = $article[$i];
            $repository = $em->getRepository('backOfficeBundle:images');
            $img = $repository->findByIdProduct($article[$i]->getId());
            if($img){
                $articles[$i]["img"] = $img[0]->getUrlImgMin();
            }
            else{
                $articles[$i]["img"] = "/Bundle/ST/images/noimage.jpg";
            }
            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $articles[$i]["cat"]  = $repository->findOneById($article[$i]->getIdcategorie());

            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $art[$i]= $repository->findOneByIdProduit($article[$i]->getId());

            if($art[$i]->getNewPrix() !=0 && ( $art[$i]->getNewPrix()< $art[$i]->getPrix())){
                $articles[$i]["prix"] = $art[$i]->getNewPrix();
            }else{
                $articles[$i]["prix"] = $art[$i]->getPrix();
            }

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $color = $repository->findByIdProduct($article[$i]->getId());
            if($color){
                $articles[$i]["color"] = $color[0]->getId();
            }
            else{
                $articles[$i]["color"] = 0;
            }
        }

        $res  = $this->get('knp_paginator')->paginate(
            $articles,
            $request->query->get('page', 1),
            21
        );

        //---------------PANIER--------------//

        $session = new Session();
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }

        return $this->render('@frontOffice/Default/test.html.twig',array("article"=>$res,"marque"=>$marque,"npanier"=>$n,"connect"=>$connect,"catAff"=>$categorieAff,"pan"=>$petitpan));

    }
    /**
     * @Route("/MotDePasseOublie/")
     * @Template()
     */
    public function MotDePasseOublieAction(Request $request)
    {

        $session = new Session();
        $panier = array();
        $petitpan = array();
        $response = "";
        if ($session->get("panier")) {
            $panier = $session->get("panier");
        }
        if ($session->get("petitpan")) {
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect = "";

        if ($session->get("connectU") && $session->get("connectU") == "OK") {
            return $this->Redirect('/index/');
        } else {
            $connect = "";
        }

        if ($request->getMethod() == "POST") {


            if (!filter_var($request->get("email"), FILTER_VALIDATE_EMAIL)) {
                $response = "Adresse email non valide";
            } else {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:membre');
                $us = $repository->findOneBy(array("email" => $request->get("email")));
                if ($us) {

                    $repository = $em->getRepository('backOfficeBundle:token');
                    $token = $repository->findOneByIdMembre($us->getId());
                    $t = "";
                    if ($token) {
                        $t = $token->getToken();
                    } else {
                        $date = new \DateTime();
                        $d = date_format($date, "Y-m-d H:i");
                        $t = md5($us->getEmail() . $us->getId() . $d);
                        $token = new token();
                        $token->setToken($t);
                        $token->setIdMembre($us->getId());
                        $em->persist($token);
                        $em->flush();
                    }
                    $to = $request->get("email");
                    $subject = "Mot de passe oublié";
                    $message = "\n";
                    $message = $message . "Bonjour " . $us->getNom();
                    $message = $message . " \n\n" . "Vous pouvez reinitialiser votre mot de passe en cliquant sur ce lien : http://www.xxxxx.ma/reset/" . $t . "/?id=" . $us->getId();
                    $message = $message . " \n\n\n\n" . "e-commerce : ";
                    $entetedate = date("D, j M Y H:i:s");

                    $headers = 'From: xxxxx@xxxxx.com ' . "\n";
                    $headers = $headers . "Date: " . $entetedate . " \n";

                    if (mail($to, $subject, $message, $headers)) {
                        $response = "Un email est envoyé à votre adresse, veuillez verifier votre boite email";
                    } else {
                        $response = "Une erreur s'est produite";
                    }

                } else {
                    $response = "Cet utilisateur ne figure pas dans notre base de données";
                }
            }
        }

        $categorieAff =array();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/MotDePasseOublie.html.twig', array("npanier" => $n, "response" => $response, "connect" => $connect, "pan" => $petitpan,"catAff"=>$categorieAff));
    }



    /**
     * @Route("/inscri/")
     * @Template()
     */
    public function inscriAction(Request $request)
    {
        $session = new Session();
        $connect = "";
        if($session->get("connectU") && $session->get("connectU") == "OK"){
            return $this->Redirect('/mon-profil/');
        }
        else{
            $connect == "";
        }
        //---------------PANIER--------------//

        $panier = array();
        $petitpan = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);
        $response = "";
        $sexe = "";
        $nom = "";
        $prenom = "";
        $tel = "";
        $mobile= "";
        $adresse = "";
        $email = "";
        if ($request->getMethod() == 'POST')
        {
            $sexe = $request->get("sexe");
            $nom = $request->get("nom");
            $prenom = $request->get("prenom");
            $tel = $request->get("tel");
            $mobile= $request->get("mobile");
            $adresse = $request->get("adresse");
            $email = $request->get("email");
            $password = $request->get("password");
            $pass2 = $request->get("password2");

            if(empty($nom) || empty($prenom) || empty($mobile) || empty($adresse) || empty($email) || empty($password) || empty($pass2)){
                $response = "Un des champs est vide";


            }
            else{
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if(preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}$#', $mobile) == true){
                        if((preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}$#', $tel) == true) || empty($tel)) {
                            if (strlen($password) >= 8 && strlen($password) <= 16) {
                                if ($password == $pass2) {
                                    $em = $this->getDoctrine()->getManager();
                                    $repository = $em->getRepository('backOfficeBundle:membre');
                                    $mem = $repository->findOneByEmail($email);
                                    if ($mem) {
                                        $response = "Utilisateur existant, veuillez changer d'adresse mail";
                                    } else {

                                        $membre = new membre();
                                        $membre->setSexe($sexe);
                                        $membre->setNom($nom);
                                        $membre->setPrenom($prenom);
                                        $membre->setTel($tel);
                                        $membre->setAdresse($adresse);
                                        $membre->setMobile($mobile);
                                        $membre->setEmail($email);
                                        $membre->setPassword(md5($password));
                                        $membre->setIdFacebook("");
                                        $membre->setTokenFacebook("");
                                        $em->persist($membre);
                                        $em->flush();

                                        $commande = new commande();
                                        $commande->setDateCommande(new \DateTime());
                                        $commande->setIdmembre($membre->getId());
                                        $commande->setTotal(0);
                                        $commande->setValidation(0);
                                        $commande->setValidationUser(0);
                                        $commande->setNote("");
                                        $commande->setEtatPaiment(0);
                                        $commande->setLivraison("");
                                        $commande->setModePaiment("");
                                        $commande->setMtLivraison(0);
                                        $commande->setResponseCMI("");
                                        //$commande->setLivraison(0);
                                        $em->persist($commande);
                                        $em->flush();

                                        $total = 0;
                                        foreach ($panier as $p) {
                                            $em = $this->getDoctrine()->getManager();
                                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                                            $article = $repository->findOneById($p->getIdProduitsite());
                                            $q = $p->getQuantite();


                                            if($article->getNewPrix() !=0 && ( $article->getNewPrix()< $article->getPrix())){
                                                $pr = $article->getNewPrix();
                                            }else{
                                                $pr = $article->getPrix();
                                            }
                                            $total = $total + ($pr * $q);
                                            $p->setIdCommande($commande->getId());
                                            $em->persist($p);
                                            $em->flush();
                                        }
                                        $commande->setTotal($total);
                                        $em->flush();

                                        $session->set("connectU", "OK");
                                        $session->set("userU", $membre);
                                        $session->set("commande", $commande->getId());

                                        return $this->Redirect('/mon-profil/');
                                    }

                                } else {
                                    $response = "Les deux mot de passe ne sont pas identique";
                                }
                            } else {
                                $response = "Le mot de passe doit comprendre entre 8 et 16 caractéres";
                            }
                        }
                        else{
                            $response = "Numero de Fix incorrect";
                        }
                    }
                    else{
                        $response = "Numero de mobile incorrect";
                    }
                }
                else{
                    $response = "Email incorrect";
                }
            }
        }
        $em = $this->getDoctrine()->getManager();
        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/inscri.html.twig',array("response"=>$response,"npanier"=>$n,"connect"=>$connect,"pan"=>$petitpan,"userU"=>$session->get('userU'),"sexe"=>$sexe
        ,"nom"=>$nom,"prenom"=>$prenom,"tel"=>$tel,"mobile"=>$mobile,"adresse"=>$adresse,"email"=>$email,"catAff"=>$categorieAff));

    }


    //-------------------reset password---------------------
    /**
     * @Route("/reset/",defaults={"token" : "NONE"})
     * @Route("/reset/{tokenString}/")
     * @Template()
     */

    public function resetPasswordAction(Request $request,$tokenString = "NONE"){

        $session = new Session();
        if($session->get("connectU") && $session->get("connectU") == "OK"){
            return $this->Redirect('/index/');
        }
        else{
            if($tokenString == "NONE"){
                return $this->Redirect('/auth/');
            }
            else{
                $panier = array();
                if($session->get("panier")){
                    $panier = $session->get("panier");
                }
                $petitpan = array();
                if($session->get("petitpan")){
                    $petitpan = $session->get("petitpan");
                }
                $n = count($panier);
                $connect = $session->get("connectU");
                $response = "";
                if(isset($_GET["id"])){
                    $em = $this->getDoctrine()->getManager();
                    $repository = $em->getRepository('backOfficeBundle:token');
                    $token = $repository->findOneByIdMembre($_GET["id"]);
                    if($token){
                        if($token->getToken() == $tokenString){
                            if($request->getMethod() == "POST"){
                                $repository = $em->getRepository('backOfficeBundle:membre');
                                $u = $repository->findOneById($_GET["id"]);
                                if($u){
                                    if(strlen($request->get("pass1")) >= 8 && strlen($request->get("pass1")) <= 16){
                                        if($request->get("pass1") == $request->get("pass2")){
                                            $u->setPassword(md5($request->get("pass1") ));
                                            $em->flush();
                                            $em->remove($token);
                                            $em->flush();
                                            //-----------
                                            return $this->Redirect('/auth/');
                                        }
                                        else{
                                            $response = "Les deux mot de passe ne sont pas identique";
                                        }
                                    }
                                    else{
                                        $response = "Le mot de passe doit comprendre entre 8 et 16 caractéres";
                                    }
                                }
                                else{
                                    return $this->Redirect('/auth/');
                                }
                            }
                        }
                        else{
                            return $this->Redirect('/auth/');
                        }
                    }
                    else{
                        return $this->Redirect('/auth/');
                    }
                }
                else{
                    return $this->Redirect('/auth/');
                }

                $categorieAff =array();
                $repository = $em->getRepository('backOfficeBundle:categorie');
                $categorieP = $repository->findAll();
                for($i=0;$i<count($categorieP);$i++){
                    $categorieAff[$i]['cat'] =  $categorieP[$i];

                    $repository = $em->getRepository('backOfficeBundle:souscategorie');
                    $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

                }
                return $this->render('@frontOffice/Default/resetPassword.html.twig',array("connect"=>$connect,"npanier"=>$n,"pan"=>$petitpan,"response"=>$response,"catAff"=>$categorieAff));
            }

        }

    }
    /**
     * @Route("/deconnect/")
     * @Template()
     */
    public function deconnectAction()
    {
        $session = new Session();
        $session->set("connectU","NO");
        $session->set("userU","");
        return $this->Redirect('/index/');

    }

    //---------ajouter au panier-----------
    /**
     * @Route("/addpanier/")
     * @Template()
     */
    public function addPanierAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = new Session();
        $panier = array();
        $petitpan= array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        //------petit panier
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }

        $idArticle = $request->get("idArticle");
        $quantite = $request->get("quantite");
        $colorId = $request->get("color");
        $taille = $request->get("taille");
        $valeur = $request->get("valeur");

        $repository = $em->getRepository('backOfficeBundle:color_product');
        $color = $repository->findOneById($colorId);


        if ($valeur){
            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $Tl = $repository->findOneBy(array("idProduit"=>$idArticle,"titleTaille"=>$taille,"valeurTaille"=>$valeur));
        }
        else{
            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $Tl = $repository->findOneBy(array("idProduit"=>$idArticle,"titleTaille"=>$taille));
        }


        /*$exist = false;
        if (array_key_exists($idArticle."-".$colorId, $panier)) {
            if(!$color){
                $exist = true;
            }
            else{
                if($panier[$idArticle]->getCode() == $color->getCode()){
                    $exist = true;
                }
            }
        }
        */

        if (array_key_exists($idArticle."-".$colorId."-".$taille."-".$valeur, $panier)) {
            $response = "EXIST";
        }
        else{
            if($quantite < 1){
                $response = "QUANTITY";
            }
            else{
                if($quantite>$Tl->getQteStock()){
                    $response = "epuise";
                }
                else{
                    $col = "";
                    $tcol = "";

                    if($color){
                        $tcol = $color->getTitle();
                        $col = $color->getCode();
                    }

                    if ($Tl){
                        if($Tl->getNewPrix() > 0 && ( $Tl->getNewPrix()< $Tl->getPrix()))
                        {
                            $Pr = $Tl->getNewPrix();
                        }else{
                            $Pr = $Tl->getPrix();
                        }
                    }

                    $p = new panier();
                    $p->setIdProduitsite($idArticle);
                    $p->setQuantite($quantite);
                    $p->setCode($col);
                    $p->setColor($tcol);
                    $p->setIdColor($colorId);
                    $p->setPrix($Pr);
                    $p->setTitleTaille($taille);
                    $p->setValeurTaille($valeur);
                    $panier[$idArticle."-".$colorId."-".$taille."-".$valeur] = $p;
                    $session->set("panier",$panier);

                    //-----mettre  l'article dans la session pour le petit panier
                    $repository = $em->getRepository('backOfficeBundle:produitsite');
                    $t = $repository->findOneById($idArticle);
                    $repository = $em->getRepository('backOfficeBundle:images');
                    $img = $repository->findByIdProduct($idArticle);
                    if($img){
                        $petitpan[$idArticle."-".$colorId]['img'] = $img[0]->getUrlImgMin();
                    }
                    $petitpan[$idArticle."-".$colorId."-".$taille."-".$valeur]['produit'] = $t;

                    $petitpan[$idArticle."-".$colorId."-".$taille."-".$valeur]['color'] = null;
                    if($color){
                        $petitpan[$idArticle."-".$colorId."-".$taille."-".$valeur]['color'] = $color;
                    }

                    $session->set("petitpan",$petitpan);

                    //-----IF USER CONNECTED - SAVE DATA IN DATA BASE.

                    if($session->get("connectU") && $session->get("connectU") == "OK"){
                        $em = $this->getDoctrine()->getManager();
                        $idCommande = $session->get("commande");
                        $p->setIdCommande($idCommande);
                        $em->persist($p);
                        $em->flush();

                        $repository = $em->getRepository('backOfficeBundle:commande');
                        $commande = $repository->findOneById($idCommande);

                        $totalC = $commande->getTotal();
                        $em = $this->getDoctrine()->getManager();
                        $repository = $em->getRepository('backOfficeBundle:produitsite');
                        $article = $repository->findOneById($idArticle);
                        $prix = $article->getPrix();

                        if($article->getNewPrix() !=0 && ( $article->getNewPrix()< $article->getPrix())){
                            $prix = $article->getNewPrix();
                        }else{
                            $prix = $article->getPrix();
                        }
                        $total=0;
                        $prixAdd = $total + ($prix*$quantite);
                        $t = $totalC + $prixAdd;
                        $commande->setTotal($t);
                        $em->flush();

                    }
                    $response = "OK";
                }
            }
        }

        $res = new JsonResponse();
        return $res->setData(array("response"=>$response));
    }



    /**
     * @Route("/deleteFromPanier/")
     * @Template()
     */
    public function deletecPanierAction()
    {

        $session = new Session();
        $panier = array();
        $petitpan = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
            if($session->get("connectU") && $session->get("connectU") == "OK"){
                $idArticle = $_GET['id'];
                $titleArticle = $_GET['taille'];
                $valeur = $_GET['valeur'];
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:panier');
                if ($valeur){
                    $p = $repository->findOneBy(array("idProduitsite"=>$idArticle,"titleTaille"=>$titleArticle,"valeurTaille"=>$valeur));
                    $em->remove($p);
                    $em->flush();
                }else{
                    $p = $repository->findOneBy(array("idProduitsite"=>$idArticle,"titleTaille"=>$titleArticle));
                    $em->remove($p);
                    $em->flush();
                }

            }
            unset($panier[$_GET['id']."-".$_GET['idColor']."-".$_GET['taille']."-".$_GET['valeur']]);
            $session->set("panier",$panier);

            //----petit panier
            if($session->get("petitpan")){
                $petitpan = $session->get("petitpan");
                unset($petitpan[$_GET['id']."-".$_GET['idColor']."-".$_GET['taille']."-".$_GET['valeur']]);
                $session->set("petitpan",$petitpan);
            }

            if($session->get("connectU") && $session->get("connectU") == "OK") {
                $total = 0;
                foreach ($panier as $p) {
                    $em = $this->getDoctrine()->getManager();
                    $repository = $em->getRepository('backOfficeBundle:produitsite');
                    $article = $repository->findOneById($p->getIdProduitsite());
                    $q = $p->getQuantite();

                    if($article->getNewPrix() !=0 && ( $article->getNewPrix()< $article->getPrix())){
                        $pr = $article->getNewPrix();
                    }else{
                        $pr = $article->getPrix();
                    }
                    $total = $total + ($pr * $q);
                }

                $idCommande = $session->get("commande");
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:commande');
                $commande = $repository->findOneById($idCommande);

                $commande->setTotal($total);
                $em->flush();
            }
        }
        $response = "OK";
        $res = new JsonResponse();
        return $res->setData(array("response"=>$response));
    }

    //------quantite-----------

    /**
     * @Route("/addquantite/")
     * @Template()
     */
    public function addQuantiteAction(Request $request)
    {
        $session = new Session();
        $panier = array();
        if($session->get("panier")) {
            $panier = $session->get("panier");

        }

        $response = "NO";
        $idArticle = $request->get("idArticle");
        $idColor = $request->get("idColor");
        $taille = $request->get("taille");
        $quantite = $request->get("quantite");
        $valeur = $request->get("valeur");
        if($quantite==0 || $quantite < 0){
            $response = "NO";
        }else{



            if (array_key_exists($idArticle."-".$idColor."-".$taille."-".$valeur, $panier)) {
                $panier[$idArticle."-".$idColor."-".$taille."-".$valeur]->setQuantite($quantite);

                if($session->get("connectU") && $session->get("connectU") == "OK"){
                    $em = $this->getDoctrine()->getManager();
                    $idCommande = $session->get("commande");
                    $repository = $em->getRepository('backOfficeBundle:panier');
                    $p = $repository->findOneBy(array("idProduitsite"=>$idArticle,"idColor"=>$idColor,"titleTaille"=>$taille,"valeurTaille"=>$valeur,"idCommande"=>$idCommande));
                    $p->setIdCommande($idCommande);
                    $p->setQuantite($quantite);
                    $em->flush();
                }
                $session->set("panier",$panier);
                $total = 0;
                $i=0;
                foreach ($panier as $p){
                    $em = $this->getDoctrine()->getManager();
                    $repository = $em->getRepository('backOfficeBundle:produitsite');
                    $article = $repository->findOneById($p->getIdProduitsite());
                    $q = $p->getQuantite();

                    $repository = $em->getRepository('backOfficeBundle:produit_info');
                    $article1 = $repository->findOneBy(array("idProduit"=>$p->getIdProduitsite(),"titleTaille"=>$p->getTitleTaille(),"valeurTaille"=>$p->getValeurTaille()));


                    if($article1->getNewPrix() !=0 && ( $article1->getNewPrix()< $article1->getPrix())){
                        $pr = $article1->getNewPrix();
                    }else{
                        $pr = $article1->getPrix();
                    }
                    $total = $total + ($pr*$q);
                }
                $response = $total;
                if($session->get("connectU") && $session->get("connectU") == "OK") {
                    $idCommande = $session->get("commande");
                    $em = $this->getDoctrine()->getManager();
                    $repository = $em->getRepository('backOfficeBundle:commande');
                    $commande = $repository->findOneById($idCommande);

                    if ($commande){
                        $commande->setTotal($total);
                        $em->flush();
                    }
                }
            }
        }

        $res = new JsonResponse();
        return $res->setData(array("response"=>$response));
    }

    //------quantite
    /**
     * @Route("/changeQuantite/")
     * @Template()
     */
    public function changeQuantiteAction(Request $request)
    {
        $session = new Session();
        $panier = array();
        if($session->get("panier")) {
            $panier = $session->get("panier");
        }

        $response = "NO";
        $id = $request->get("id");
        $quantite = $request->get("quantite");

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('backOfficeBundle:produit_info');
        $art = $repository->find($id);

        $q = $art->getQteStock();

        if ($quantite>$q){
            $response = $q;
        }
        else{
            $response = "!NO";
        }

        $res = new JsonResponse();
        return $res->setData(array("response"=>$response));
    }

    /**
     * @Route("/panier/")
     * @Template()
     */
    public function panierAction()
    {
        $session = new Session();
        $panier = array();
        $petitpan = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);
        $article = array();
        $total = 0;
        $i=0;

        foreach ($panier as $p){
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:produitsite');
            $article[$i]["obj"] = $repository->findOneById($p->getIdProduitsite());

            $article[$i]["qte"] = $p->getQuantite();
            $repository = $em->getRepository('backOfficeBundle:images');
            $img = $repository->findByIdProduct($p->getIdProduitsite());
            if($img){
                $article[$i]["img"] = $img[0]->getUrlImgMin();
            }
            else{
                $article[$i]["img"] = "/Bundle/ST/images/noimage.jpg";
            }

            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $article[$i]["obj1"] = $repository->findOneBy(array("idProduit"=>$p->getIdProduitsite(),"titleTaille"=>$p->getTitleTaille(),"valeurTaille"=>$p->getValeurTaille()));

                if($article[$i]["obj1"]->getNewPrix() !=0 && ( $article[$i]["obj1"]->getNewPrix()< $article[$i]["obj1"]->getPrix())){
                    $article[$i]['prix'] = $article[$i]["obj1"]->getNewPrix();
                }else{
                    $article[$i]['prix']  = $article[$i]["obj1"]->getPrix();
                }

            $total = $total + ($article[$i]["prix"]*$article[$i]["qte"]);

            $article[$i]["color"] = $p->getCode();
            $article[$i]["idColor"] = $p->getIdColor();

            $i++;
        }

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }
        $em = $this->getDoctrine()->getManager();
        $mem = $session->get("userU");
        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }

        return $this->render('@frontOffice/Default/panier.html.twig' ,array("npanier"=>$n,"article"=>$article,"total"=>$total,"connect"=>$connect,"pan"=>$petitpan,"us"=>$session->get("userU"),"membre"=>$mem,"catAff"=>$categorieAff));
    }

    //-------commander-------------
    /**
     * @Route("/commander/")
     * @Template()
     */
    public function commanderAction(Request $request)
    {
        $session = new Session();
        $post = "";
        $stringToPost = "";
        $arrayToPost = array();
        if($session->get("connectU") && $session->get("connectU") == "OK") {
            $idCommande = $session->get("commande");
            //$livraison = 0;

            $mtLivraison = 0;

            $lv = $request->get("livraison");
            $modePaiement = $request->get("modePaiement");

            if($lv == "domicile"){
                $mtLivraison = 60;
            }
            else{
                $lv = "";
            }


            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:commande');
            $commande = $repository->findOneById($idCommande);

            $repository = $em->getRepository('backOfficeBundle:panier');
            $panier = $repository->findByIdCommande($idCommande);

            for ($i=0;$i<count($panier);$i++){

                $repository = $em->getRepository('backOfficeBundle:produit_info');
                $produitInfo[$i] = $repository->findOneBy(array("idProduit"=>$panier[$i]->getIdproduitsite(),"titleTaille"=>$panier[$i]->getTitleTaille(),"valeurTaille"=>$panier[$i]->getValeurTaille()));

                $qua[$i]=$produitInfo[$i]->getQteStock();
                $panierQte[$i]=$panier[$i]->getQuantite();

                $zero=0;
                $drQte[$i]=$zero+$qua[$i]-$panierQte[$i];

                $produitInfo[$i]->setQteStock($drQte[$i]);
            }
            $commande->setDateCommande(new \DateTime());
            $commande->setValidationUser(1);
            $commande->setMtLivraison("");
            $commande->setLivraison("");
            $commande->setModePaiment("");

            $em->flush();

            //-------- send email ---------//





            //------------ Fin ------------//

            $session->set("panier", null);
            $session->set("petitpan", null);

            $commande = new Commande();
            $commande->setValidation(0);
            $commande->setTotal(0);
            $commande->setIdmembre($session->get("userU")->getId());
            $commande->setValidationUser(0);
            //$commande->setLivraison(0);
            $commande->setDateCommande(new \DateTime());
            $commande->setNote("");
            $commande->setEtatPaiment(0);
            $commande->setLivraison("");
            $commande->setModePaiment("");
            $commande->setMtLivraison(0);
            $commande->setResponseCMI("");

            $em->persist($commande);
            $em->flush();
            $session->set("commande", $commande->getId());
            $response = "OK";
        }
        else{
            $response = "NO1";
        }
        $res = new JsonResponse();
        return $res->setData(array("response"=>$response,"stringToPost"=>$post,"arrayToPost"=>$arrayToPost));
    }



    /**
     * @Route("/viderPanier/")
     * @Template()
     */
    public function viderPanierAction(Request $request)
    {
        $session = new Session();
        $panier = array();
        $petitpan = array();
        if($session->get("panier")){
            if($session->get("connectU") && $session->get("connectU") == "OK"){

                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:panier');
                $p = $repository->findByIdCommande($session->get("commande"));
                for($i=0;$i<count($p);$i++){
                    $em->remove($p[$i]);
                }

                $em->flush();
            }

            $session->set("panier",null);
            $session->set("petitpan",null);

            if($session->get("connectU") && $session->get("connectU") == "OK") {

                $idCommande = $session->get("commande");
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:commande');
                $commande = $repository->findOneById($idCommande);

                $commande->setTotal(0);
                $em->flush();
            }
        }
        $response = "OK";
        $res = new JsonResponse();
        return $res->setData(array("response"=>$response));
    }
    /**
     * @Route("/mon-profil/")
     * @Template()
     */
    public function profilAction(Request $request)
    {
        $session = new Session();
        if(!$session->get("connectU") || $session->get("connectU") != "OK"){
            return $this->Redirect('/auth/');
        }
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);
        $connect = $session->get("connectU");
        $user = $session->get("userU");
        $response = "";
        if($request->getMethod() == "POST"){

            $sexe = $request->get("sexe");
            $nom = $request->get("nom");
            $prenom = $request->get("prenom");
            $tel = $request->get("tel");
            $mobile= $request->get("mobile");
            $adresse = $request->get("adresse");
            if(empty($nom) || empty($prenom) || empty($mobile) || empty($adresse)){
                $response = "Un des champs est vide";
            }
            else{
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:membre');
                $user = $repository->findOneById($user->getId());
                //----------------//
                $user->setNom($request->get("nom"));
                $user->setPrenom($request->get("prenom"));
                $user->setAdresse($request->get("adresse"));
                if($user->getTel() != $tel){
                    if((preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}$#', $tel) == true) || empty($tel)){
                        $user->setTel($request->get("tel"));
                    }
                }

                if($user->getMobile() != $mobile){
                    if(preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}$#', $mobile) == true){
                        $user->setMobile($request->get("mobile"));
                    }
                }
                $user->setSexe($request->get("sexe"));

                $em->flush();
                $session->set("userM",$user);
                $response ="OK";

                $pass1 = $request->get("pass1");
                if($request->get("pass1") != ""){

                    $pass2 = $request->get("pass2");
                    $pass3 = $request->get("pass3");
                    if(md5($pass1) == $user->getPassword()){
                        if(strlen($pass2) >= 8 && strlen($pass2) <= 16){
                            if($pass2 == $pass3){
                                $em = $this->getDoctrine()->getManager();
                                $repository = $em->getRepository('backOfficeBundle:membre');
                                $user = $repository->findOneById($user->getId());
                                $user->setPassword(md5($pass2));
                                $em->flush();
                                $session->set("userM",$user);
                            }
                            else{
                                $response ="Les deux mot de passe ne sont pas identique";
                            }
                        }
                        else{
                            $response ="Le nouveau mot de passe doit comprendre entre 8 et 16 caractéres";
                        }
                    }
                    else{
                        $response ="Ancien mot de passe incorrect  ou vide !!!";
                    }
                }
            }

        }
        $em = $this->getDoctrine()->getManager();
        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/mon-profile.html.twig',array("connect"=>$connect,"npanier"=>$n,"user"=>$user,"response"=>$response,"pan"=>$petitpan,"catAff"=>$categorieAff));

    }
    //--------mes commandes-------------
    /**
     * @Route("/mes-commandes/")
     * @Template()
     */
    public function mesCommandesAction()
    {

        $session = new Session();
        if(!$session->get("connectU") || $session->get("connectU") != "OK"){
            return $this->Redirect('/auth/');
        }
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);
        $connect = $session->get("connectU");
        $user = $session->get("userU");
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('backOfficeBundle:commande');
        $commande = $repository->findBy(array("idmembre"=>$user->getId(),"validationUser"=>1));

        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/mesCommandes.html.twig',array("connect"=>$connect,"npanier"=>$n,"user"=>$user,"commandes"=>$commande,"pan"=>$petitpan,"catAff"=>$categorieAff));

    }
    /**
     * @Route("/mon-detail-commande/{commandeNum}/{id}/")
     * @Template()
     */
    public function monDetailCommandeAction($commandeNum,Request $request,$id)
    {
        $session = new Session();
        if(!$session->get("connectU") || $session->get("connectU") != "OK"){
            return $this->Redirect('/auth/');
        }
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);
        $connect = $session->get("connectU");
        $user = $session->get("userU");

        if($id == NULL){
            $this->Redirect('/profil/');
        }

        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('backOfficeBundle:panier');
        $panier = $repository->findByIdCommande($id);

        $article = array();
        $total = 0;
        $i=0;
        foreach ($panier as $p){
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:produitsite');
            $article[$i]["obj"] = $repository->findOneById($p->getIdProduitsite());
            $article[$i]["qte"] = $p->getQuantite();
            $repository = $em->getRepository('backOfficeBundle:images');
            $img = $repository->findByIdProduct($p->getIdProduitsite());
            if($img){
                $article[$i]["img"] = $img[0]->getUrlImgMin();
            }
            else{
                $article[$i]["img"] = "/Bundle/ST/images/noimage.jpg";
            }

            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $article[$i]["obj1"] = $repository->findOneBy(array("idProduit"=>$p->getIdProduitsite(),"titleTaille"=>$p->getTitleTaille(),"valeurTaille"=>$p->getValeurTaille()));

            if($article[$i]["obj1"]->getNewPrix() !=0 && ( $article[$i]["obj1"]->getNewPrix()< $article[$i]["obj1"]->getPrix())){
                $article[$i]['prix'] = $article[$i]["obj1"]->getNewPrix();
            }else{
                $article[$i]['prix']  = $article[$i]["obj1"]->getPrix();
            }

            $article[$i]["color"] = $p->getCode();
            $article[$i]["idColor"] = $p->getIdColor();
            $article[$i]["taille"]=$article[$i]["obj1"]->getTitleTaille();
            $article[$i]["valeur"]=$article[$i]["obj1"]->getValeurTaille();
            $i++;
        }

        $repository = $em->getRepository('backOfficeBundle:commande');
        $cmd = $repository->findOneById($id);
        $total=$cmd->getTotal();

        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/monDetailCommande.html.twig',array("connect"=>$connect,"npanier"=>$n,"user"=>$user,"article"=>$article,"pan"=>$petitpan,"total"=>$total,"cmd"=>$cmd,"numCommande"=>$commandeNum,"catAff"=>$categorieAff));

    }


    /**
     * @Route("/produit/{nameC}/",defaults={"categorie" : "ALL","souscategorie" : "ALL","marqueId" : "ALL"})
     * @Route("/produit/{nameC}/{categorie}/")
     * @Route("/produit/{nameC}/{categorie}/{souscategorie}/")
     * @Route("/produit/{nameC}/{categorie}/{souscategorie}/{marqueId}/")
     * @Route("/produit/{nameC}/{categorie}/{souscategorie}/{marqueId}/{produitId}/")
     * @Template()
     */
    public function produitAction(Request $request,$nameC,$categorie="NONE",$souscategorie="ALL",$marqueId="ALL",$produitId="ALL")
    {

        //-------MARQUE-----------//

        $em = $this->getDoctrine()->getManager();

        //--------CAT ET SOUSCAT
        $repository = $em->getRepository('backOfficeBundle:souscategorie');
        $scategorie = $repository->findByIdcategorie($categorie);

        $article = null;

        $categorieAff =array();

        if($categorie == "ALL"){
            $repository = $em->getRepository('backOfficeBundle:categorie');
            $categorieP = $repository->findAll();
        }
        else{
            /*$repository = $em->getRepository('backOfficeBundle:categorie');
            $categorieP = $repository->findById($categorie);*/
            $repository = $em->getRepository('backOfficeBundle:categorie');
            $categorieP = $repository->findAll();
        }


        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }


        $tri = $request->get("tri");


        if($categorie != "ALL"){
            if($souscategorie != "ALL"){
                if($marqueId == "ALL") {
                    if(!empty($tri)){
                        if($tri=="dateDESC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("idCategorie" => $souscategorie),array("dateAjout"=>"DESC"));
                        }else if($tri =="dateASC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("idCategorie" => $souscategorie),array("dateAjout"=>"ASC"));
                        }else if($tri =="prixDESC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("idCategorie" => $souscategorie),array("prix"=>"DESC"));

                        }else if($tri =="prixASC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("idCategorie" => $souscategorie),array("prix"=>"ASC"));
                        }
                    }else{
                        $repository = $em->getRepository('backOfficeBundle:produitsite');
                        $article = $repository->findBy(array("idCategorie" => $souscategorie));
                    }
                }else{
                    if(!empty($tri)){
                        if($tri=="dateDESC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("idCategorie"=>$souscategorie,"idMarque"=>$marqueId),array("dateAjout"=>"DESC"));
                        }else if($tri =="dateASC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("idCategorie"=>$souscategorie,"idMarque"=>$marqueId),array("dateAjout"=>"ASC"));
                        }else if($tri =="prixDESC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("idCategorie"=>$souscategorie,"idMarque"=>$marqueId),array("prix"=>"DESC"));
                        }else if($tri =="prixASC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("idCategorie"=>$souscategorie,"idMarque"=>$marqueId),array("prix"=>"ASC"));
                        }
                    }else{
                        $repository = $em->getRepository('backOfficeBundle:produitsite');
                        $article = $repository->findBy(array("idCategorie"=>$souscategorie,"idMarque"=>$marqueId));
                    }
                }
            }
            else{

                $repository = $em->getRepository('backOfficeBundle:Souscategorie');
                $souscat = $repository->findBy(array("idcategorie"=>$categorie));
                for($i=0;$i<count($souscat);$i++){
                    $repository = $em->getRepository('backOfficeBundle:produitsite');
                    if($marqueId == "ALL") {
                        if(!empty($tri)){
                            if($tri=="dateDESC"){
                                $ar = $repository->findBy(array("idCategorie" => $souscat[$i]),array("dateAjout"=>"DESC"));
                            }else if($tri =="dateASC"){

                                $ar = $repository->findBy(array("idCategorie" => $souscat[$i]),array("dateAjout"=>"ASC"));
                            }else if($tri =="prixDESC"){

                                $ar = $repository->findBy(array("idCategorie" => $souscat[$i]),array("prix"=>"DESC"));
                            }else if($tri =="prixASC"){

                                $ar = $repository->findBy(array("idCategorie" => $souscat[$i]),array("prix"=>"ASC"));
                            }
                        }else{
                            $ar = $repository->findBy(array("idCategorie" => $souscat[$i]));
                        }
                    }
                    else{
                        if(!empty($tri)){
                            if($tri=="dateDESC"){
                                $ar = $repository->findBy(array("idCategorie" => $souscat[$i],"idMarque"=>$marqueId),array("dateAjout"=>"DESC"));
                            }else if($tri =="dateASC"){

                                $ar = $repository->findBy(array("idCategorie" => $souscat[$i],"idMarque"=>$marqueId),array("dateAjout"=>"ASC"));
                            }else if($tri =="prixDESC"){

                                $ar = $repository->findBy(array("idCategorie" => $souscat[$i],"idMarque"=>$marqueId),array("prix"=>"DESC"));
                            }else if($tri =="prixASC"){

                                $ar = $repository->findBy(array("idCategorie" => $souscat[$i],"idMarque"=>$marqueId),array("prix"=>"ASC"));
                            }
                        }else{
                            $ar = $repository->findBy(array("idCategorie" => $souscat[$i],"idMarque"=>$marqueId));                            }

                    }

                    if($ar){
                        if($article == null){
                            $article = $ar;
                        }
                        else{
                            $article = array_merge($article,$ar);
                        }

                    }
                }
            }
        }
        else{
            if($marqueId == "ALL"){
                if($produitId != "ALL"){
                    if(!empty($tri)){
                        if($tri=="dateDESC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("id"=>$produitId),array("dateAjout"=>"DESC"));
                        }else if($tri =="dateASC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("id"=>$produitId),array("dateAjout"=>"ASC"));
                        }else if($tri =="prixDESC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("id"=>$produitId),array("prix"=>"DESC"));
                        }else if($tri =="prixASC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array("id"=>$produitId),array("prix"=>"ASC"));
                        }
                    }else{
                        $repository = $em->getRepository('backOfficeBundle:produitsite');
                        $article = $repository->findBy(array("id"=>$produitId));
                    }
                }
                else{
                    if(!empty($tri)){
                        if($tri=="dateDESC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array(),array("dateAjout"=>"DESC"));
                        }else if($tri =="dateASC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array(),array("dateAjout"=>"ASC"));
                        }else if($tri =="prixDESC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array(),array("prix"=>"DESC"));
                        }else if($tri =="prixASC"){
                            $repository = $em->getRepository('backOfficeBundle:produitsite');
                            $article = $repository->findBy(array(),array("prix"=>"ASC"));
                        }
                    }else{
                        $repository = $em->getRepository('backOfficeBundle:produitsite');
                        $article = $repository->findBy(array());
                    }
                }
            }
            else{

                if(!empty($tri)){
                    if($tri=="dateDESC"){
                        $repository = $em->getRepository('backOfficeBundle:produitsite');
                        $article = $repository->findBy(array("idMarque"=>$marqueId),array("dateAjout"=>"DESC"));
                    }else if($tri =="dateASC"){
                        $repository = $em->getRepository('backOfficeBundle:produitsite');
                        $article = $repository->findBy(array("idMarque"=>$marqueId),array("dateAjout"=>"ASC"));
                    }else if($tri =="prixDESC"){
                        $repository = $em->getRepository('backOfficeBundle:produitsite');
                        $article = $repository->findBy(array("idMarque"=>$marqueId),array("prix"=>"DESC"));
                    }else if($tri =="prixASC"){
                        $repository = $em->getRepository('backOfficeBundle:produitsite');
                        $article = $repository->findBy(array("idMarque"=>$marqueId),array("prix"=>"ASC"));
                    }
                }else{
                    $repository = $em->getRepository('backOfficeBundle:produitsite');
                    $article = $repository->findBy(array("idMarque"=>$marqueId));
                }
            }
        }


        $articles = array();
        for($i=0;$i<count($article);$i++){
            $articles[$i]["obj"] = $article[$i];
            $repository = $em->getRepository('backOfficeBundle:images');
            $img = $repository->findByIdProduct($article[$i]->getId());
            if($img){
                $articles[$i]["img"] = $img[0]->getUrlImgMin();
            }
            else{
                $articles[$i]["img"] = "/Bundle/ST/images/noimage.jpg";
            }
            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $articles[$i]["cat"]  = $repository->findOneById($article[$i]->getIdCategorie());


            if($article[$i]->getNewPrix() > 0 && ( $article[$i]->getNewPrix()< $article[$i]->getPrix())){
                $articles[$i]["prix"] = $article[$i]->getNewPrix();
            }else{
                $articles[$i]["prix"] = $article[$i]->getPrix();
            }

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $color = $repository->findByIdProduct($article[$i]->getId());
            if($color){
                $articles[$i]["color"] = $color[0]->getId();
            }
            else{
                $articles[$i]["color"] = 0;
            }
        }

        $res  = $this->get('knp_paginator')->paginate(
            $articles,
            $request->query->get('page', 1),
            21
        );

        //---------------PANIER--------------//

        $session = new Session();
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }

        if($nameC == "AUCUN_PRODUIT_TROUVE"){
            $nameC = "AUCUN PRODUIT TROUVÉ";
        }

        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('backOfficeBundle:produit_info');
        $produits = $rep->findAll();

        return $this->render('@frontOffice/Default/produit.html.twig',array("produit"=>$produits,"article"=>$res,"scategorie"=>$scategorie,"cat"=>$categorie,"scat"=>$souscategorie,"nameC"=>$nameC,"marqueId"=>$marqueId,"npanier"=>$n,"connect"=>$connect,"catAff"=>$categorieAff,"pan"=>$petitpan,"tri"=>$tri));
    }

    /**
     * @Route("/produit_detail/{name}/{id}/")
     * @Template()
     */

    public function detailProduitAction($id="NONE",$name="NONE"){
        $session = new Session();

        if($id == "NONE"){
            return $this->Redirect('/index/');
        }

        $response = array();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('backOfficeBundle:produitsite');
        $article = $repository->findOneById($id);

        $repository = $em->getRepository('backOfficeBundle:produit_info');
        $article1 = $repository->findOneBy(array("idProduit"=>$id),array("prix"=>"ASC"));

        if(!$article){
            return $this->Redirect('/index/');
        }

        $response["obj"] = $article;
        $response["obj1"] = $article1;


        //----table---
        $repository = $em->getRepository('backOfficeBundle:produit_info');
        $article2 = $repository->findBy(array("idProduit"=>$id),array("prix"=>"ASC"));

        $table=array();
        for($i=0;$i<count($article2);$i++){

            $table[$i]["obj2"] = $article2[$i];

            if($article2[$i]->getNewPrix() > 0 && ( $article2[$i]->getNewPrix()< $article2[$i]->getPrix())){
                $table[$i]["pr"] = $article2[$i]->getNewPrix();
            }else{
                $table[$i]["pr"] = $article2[$i]->getPrix();
            }

            $buttonActive=array();
            $Qtes[$i] = $article2[$i]->getQteStock();
            if ($Qtes[$i]>=1){
                $buttonActive[$i]=1;
            }
            else{
                $buttonActive[$i]=0;
            }
            $table[$i]["qtsall"]=$buttonActive[$i];

        }

        //-----CAT---------//
        $repository = $em->getRepository('backOfficeBundle:souscategorie');
        $response["cat"] = $repository->findOneById($article->getIdcategorie());

        $repository = $em->getRepository('backOfficeBundle:images');
        $image = $repository->findByIdProduct($article->getId());

        $response["img"] = $image;
        //----PRIX------//


            if($article1->getNewPrix() !=0 && ( $article1->getNewPrix()< $article1->getPrix())){
                $response["prix"] = $article1->getNewPrix();
            }else{
                $response["prix"] = $article1->getPrix();
            }
        $buttonActive1="";
        $Qtes[$i] = $article1->getQteStock();
        if ($Qtes[$i]>=1){
            $buttonActive1=1;
        }
        else{
            $buttonActive1=0;
        }



        $repository = $em->getRepository('backOfficeBundle:color_product');
        $colors = $repository->findByIdProduct($article->getId());

        $response["colors"] = $colors;

        //------- mes derniere consultation -----//

        $old = $session->get("articles");

        if(!$old){
            $old = array();
        }
        if(!in_array($article->getId(), $old)){
            $new = array();

            $index = 0;
            $new[$index] = $article->getId();
            $index++;

            for($i=0;$i<3;$i++){
                if($i == count($old)){
                    break;
                }
                else{
                    $new[$index] = $old[$i];
                }
                $index++;
            }

            $session->set("articles",$new);
        }

        //---------------PANIER--------------//

        $session = new Session();
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }
            //--------------tailles--------------
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('backOfficeBundle:produit_info');
        $tailles = $repository->findOneBy(array("idProduit"=>$id),array("prix"=>"ASC"));

            //---------------------------------

        $promotion = null;
        $articlesug = null;
        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/detailProduit.html.twig',array("buttonActive"=>$buttonActive1,"table"=>$table,"tailles"=>$tailles,"promotion"=>$promotion,"article"=>$response,"npanier"=>$n,"pan"=>$petitpan,"connect"=>$connect,"suggestion"=>$articlesug,"catAff"=>$categorieAff));

    }

    /**
     * @Template()
     */
    public function derniereConsultationAction()
    {

        $session = new Session();
        $idsArticle = $session->get("articles");

        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('backOfficeBundle:Produitsite');
        $article = $repository->findBy(array("id"=>$idsArticle));

        $repository = $em->getRepository('backOfficeBundle:produit_info');
        $article1 = $repository->findBy(array("idProduit"=>$idsArticle));

        $articles = array();
        for($i=0;$i<count($article);$i++){
            $articles[$i]["obj"] = $article[$i];
            $articles1[$i]["obj1"] = $article1[$i];

            $repository = $em->getRepository('backOfficeBundle:Images');
            $img = $repository->findByIdProduct($article[$i]->getId());
            if($img){
                $articles[$i]["img"] = $img[0]->getUrlImgMin();
            }
            else{
                $articles[$i]["img"] = "/Bundle/ST/images/noimage.jpg";
            }
            
            $repository = $em->getRepository('backOfficeBundle:Souscategorie');
            $articles[$i]["cat"]  = $repository->findOneById($article[$i]->getIdCategorie());

            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $article1[$i] = $repository->findOneBy(array("idProduit"=>$article[$i]->getId()),array("prix"=>"ASC"));



            if($article1[$i]->getNewPrix() > 0 && ( $article1[$i]->getNewPrix()< $article1[$i]->getPrix())){
                $articles[$i]["prix"] = $article1[$i]->getNewPrix();
            }else{
                $articles[$i]["prix"] = $article1[$i]->getPrix();
            }



            $repository = $em->getRepository('backOfficeBundle:color_product');
            $color = $repository->findByIdProduct($article[$i]->getId());
            if($color){
                $articles[$i]["color"] = $color[0]->getId();
            }
            else{
                $articles[$i]["color"] = 0;
            }
        }

        return $this->render('@frontOffice/Default/derniereConsultation.html.twig',array("article"=>$articles));

    }

    /**
     * @Route("/cat/")
     * @Template()
     */
    public function catAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        //--------CAT ET SOUSCAT

        $article = null;

        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/cat.html.twig',array("catAff"=>$categorieAff));

    }


    /**
     * @Route("/search/")
     * @Template()
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //--------CAT ET SOUSCAT

        $article = null;

        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }

        $key = $request->get('key');

        $repo = $this->getDoctrine()
            ->getManager()
            ->getRepository('backOfficeBundle:produitsite');
        $qb = $repo->createQueryBuilder('n');
        $qb->select('n')
            ->where('n.titre LIKE :key ' )
            ->setParameter('key', '%'.$key.'%');
        $article = $qb->getQuery()->getResult();



        $articles = array();
        for($i=0;$i<count($article);$i++){
            $articles[$i]["obj"] = $article[$i];
            $repository = $em->getRepository('backOfficeBundle:images');
            $img = $repository->findByIdProduct($article[$i]->getId());
            if($img){
                $articles[$i]["img"] = $img[0]->getUrlImgMin();
            }
            else{
                $articles[$i]["img"] = "/Bundle/ST/images/noimage.jpg";
            }
            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $articles[$i]["cat"]  = $repository->findOneById($article[$i]->getIdcategorie());

            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $art[$i]= $repository->findOneByIdProduit($article[$i]->getId());

            if($art[$i]->getNewPrix() !=0 && ( $art[$i]->getNewPrix()< $art[$i]->getPrix())){
                $articles[$i]["prix"] = $art[$i]->getNewPrix();
            }else{
                $articles[$i]["prix"] = $art[$i]->getPrix();
            }

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $color = $repository->findByIdProduct($article[$i]->getId());
            if($color){
                $articles[$i]["color"] = $color[0]->getId();
            }
            else{
                $articles[$i]["color"] = 0;
            }
        }

        $res  = $this->get('knp_paginator')->paginate(
            $articles,
            $request->query->get('page', 1),
            21
        );

        //---------------PANIER--------------//

        $session = new Session();
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }

        return $this->render('@frontOffice/Default/search.html.twig',array("article"=>$res,"npanier"=>$n,"connect"=>$connect,"catAff"=>$categorieAff,"pan"=>$petitpan));

    }

    /**
     * @Route("/promotion//")
     * @Template()
     */
    public function promotionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //--------CAT ET SOUSCAT

        $article = null;

        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }

        $repo = $this->getDoctrine()
            ->getManager()
            ->getRepository('backOfficeBundle:produitsite');

        $qb = $repo->createQueryBuilder('a');
        $qb->select('a');
        $qb->where(' a.prix > a.newPrix');

        $art = $qb->getQuery()->getResult();
        $promotion = array();
        for($i=0;$i<count($art);$i++){

            $promotion[$i]["obj"] = $art[$i];
            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $promotion[$i]["cat"]  = $repository->findOneById($art[$i]->getIdCategorie());

            $repository = $em->getRepository('backOfficeBundle:images');
            $img = $repository->findByIdProduct($art[$i]->getId());
            if($img){
                $promotion[$i]["img"] = $img[0]->getUrlImgMin();
            }
            else{
                $promotion[$i]["img"] = "/Bundle/ST/images/noimage.jpg";
            }

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $color = $repository->findByIdProduct($art[$i]->getId());
            if($color){
                $promotion[$i]["color"] = $color[0]->getId();
            }
            else{
                $promotion[$i]["color"] = 0;
            }
        }

        $res  = $this->get('knp_paginator')->paginate(
            $promotion,
            $request->query->get('page', 1),
            21
        );

        //---------------PANIER--------------//

        $session = new Session();
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }

        return $this->render('@frontOffice/Default/promotion.html.twig', array("article"=>$res,"npanier"=>$n,"connect"=>$connect,"catAff"=>$categorieAff,"pan"=>$petitpan));

    }

    /**
     *@Route("/newsletter/")
     */
    public function newsletterAction(Request $request)
    {

        $message="";
        if($request->getMethod() == 'POST') {


            $email =$request->get('emailnewletter');

            if(empty($email)){

                $message="";

            }
            else{
                if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $em = $this->getDoctrine()->getManager();
                    $newsletter = new newsletter();
                    $newsletter->setEmail($email);
                    $em->persist($newsletter);
                    $em->flush();
                    $message="OK";
                }else{
                    $message="invalide";

                }
            }

            $res = new JsonResponse();
            return $res->setData(array("response" => $message));
        }else{
            return array();
        }
    }
    /**
     * @Route("/contact/")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $message="";
        if($request->getMethod() == 'POST') {

            $nom = $request->get('nom');
            $email = $request->get('email');
            $em = $this->getDoctrine()->getManager();

            $expediteur ="Nom:  " .$nom."Email: ".$email;
            $messaje =$request->get('text');
            $msg= "nom:  " .$nom."<br>email: ".$email."<br><br>"."message:  ".$messaje;
            if(empty($nom) ||empty($email) || empty($messaje)){
                $message="Veuillez remplir tous les champs";
            }
            else{
                if(filter_var($email,FILTER_VALIDATE_EMAIL)){

                    mail("xxxxxxx@gmail.com","Contact",$msg,"Content-type: text/html");
                    $message="succes";
                }else{
                    $message="Veuillez indiquer un email correct.EX:test@test.com";

                }
            }
        }

        //---------------PANIER--------------//

        $session = new Session();
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }
        $em = $this->getDoctrine()->getManager();
        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/contact.html.twig',array("response"=>$message,"npanier"=>$n,"connect"=>$connect,"pan"=>$petitpan,"catAff"=>$categorieAff));

    }

    /**
     * @Route("/a-propos/")
     * @Template()
     */
    public function aproposAction()
    {


        //---------------PANIER--------------//
        $em = $this->getDoctrine()->getManager();
        $session = new Session();
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }
        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/apropos.html.twig',array("npanier"=>$n,"connect"=>$connect,"pan"=>$petitpan,"catAff"=>$categorieAff));

    }
    /**
     * @Route("/cgv/")
     * @Template()
     */
    public function cgvAction()
    {
        
        //---------------PANIER--------------//
        $em = $this->getDoctrine()->getManager();
        $session = new Session();
        $panier = array();
        if($session->get("panier")){
            $panier = $session->get("panier");
        }
        $petitpan = array();
        if($session->get("petitpan")){
            $petitpan = $session->get("petitpan");
        }
        $n = count($panier);

        $connect ="";
        if($session->get("connectU")){
            $connect = $session->get("connectU");
        }
        $categorieAff =array();
        $repository = $em->getRepository('backOfficeBundle:categorie');
        $categorieP = $repository->findAll();
        for($i=0;$i<count($categorieP);$i++){
            $categorieAff[$i]['cat'] =  $categorieP[$i];

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $categorieAff[$i]['sousCat'] = $repository->findByIdcategorie($categorieP[$i]->getId());

        }
        return $this->render('@frontOffice/Default/cgv.html.twig',array("npanier"=>$n,"connect"=>$connect,"pan"=>$petitpan,"catAff"=>$categorieAff));

    }


    /**
     * @Route("/getPrix/")
     * @Template()
     */
    public function getPrixAction()
    {
        $request = $this->get('request_stack')->getCurrentRequest();
        $taille=$request->get("taille");
        $idProduit=$request->get("idProduit");
        $result="";
        $produit=$this->getDoctrine()->getRepository("backOfficeBundle:produit_info")
            ->findby(array("idProduit" => $idProduit,"titleTaille"=>$taille));

        if($produit)
        {
            for($i=0;$i<count($produit);$i++)
            {
                $prix[$i]=$produit[$i]->getPrix();
                $newPrix[$i]=$produit[$i]->getNewPrix();
                $Longeur[$i]=$produit[$i]->getLongeur();
                $Largeur[$i]=$produit[$i]->getLargeur();
                $Hauteur[$i]=$produit[$i]->getHauteur();
                $Poids[$i]=$produit[$i]->getPoids();
                $Puissance[$i]=$produit[$i]->getPuissance();
            }


            return new JsonResponse(array("newPrix"=>$newPrix[0],"prix"=>$prix[0],"Longeur"=>$Longeur[0],"Largeur"=>$Largeur[0],"Hauteur"=>$Hauteur[0],"Poids"=>$Poids[0],"Puissance"=>$Puissance[0]));
        }
        return new Response($result);
    }


    /**
     * @Template()
     */
    public function accueilAction()
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('backOfficeBundle:Souscategorie');
        $sousCat = $repository->findAll();
        return array("sousCats"=>$sousCat);

    }
}

<?php

namespace backOfficeBundle\Controller;



use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Parsing\Html;
use backOfficeBundle\Entity\admin;
use backOfficeBundle\Entity\Devis;
use backOfficeBundle\Entity\roles;
use backOfficeBundle\Entity\charge;
use backOfficeBundle\Entity\client;
use backOfficeBundle\Entity\images;
use backOfficeBundle\Entity\Projet;
use backOfficeBundle\Entity\slider;
use backOfficeBundle\Entity\depence;
use backOfficeBundle\Entity\facture;
use backOfficeBundle\Entity\marques;
use backOfficeBundle\Entity\paiment;
use backOfficeBundle\Entity\Tailles;
use backOfficeBundle\Entity\Paiement;
use backOfficeBundle\Entity\produits;
use backOfficeBundle\Entity\entreprise;
use backOfficeBundle\Entity\Piecejoint;
use backOfficeBundle\Entity\fournisseur;
use backOfficeBundle\Entity\produitsite;
use backOfficeBundle\Entity\detail_devis;
use backOfficeBundle\Entity\Detail_Stock;
use backOfficeBundle\Entity\produit_info;
use backOfficeBundle\Entity\color_product;
use backOfficeBundle\Entity\Detail_projet;
use backOfficeBundle\Entity\Produit_Stock;
use backOfficeBundle\Entity\detail_Facture;
use backOfficeBundle\Entity\Produitpremier;
use backOfficeBundle\Entity\attribute_color;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use backOfficeBundle\Entity\facturefournisseur;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use backOfficeBundle\Repository\fournisseurRepository;
use backOfficeBundle\Repository\factureRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Doctrine\DBAL\Platforms\Keywords\ReservedKeywordsValidator;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class DefaultController extends Controller
{
    /**
     * @Route("/index1/")
     * @Template()
     */
    public function index1Action(Request $request)
    {

        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            $response = "";

            $listYear = array();

            $j = 0;
            for ($i = 2020; $i < date("Y") + 1; $i++) {
                $listYear[$j] = $i;
                $j++;
            }

            $annee = date("Y");

            if ($request->getMethod() == "POST") {

                $formAnnee = $request->get("Annee");
                if (!empty($formAnnee)) {
                    $annee = $formAnnee;
                }

            }
            $resultCfChart = array();
            setlocale(LC_TIME, "fr_FR");

            for ($i = 1; $i < 13; $i++) {
                //------------CMD

                $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('backOfficeBundle:commande');

                $qb = $repo->createQueryBuilder('a');
                $qb->select('SUM(a.total)');
                $qb->where('a.dateCommande between :date1 and :date2 and a.validationUser = :validationUser and a.validation = :validation');
                $qb->setParameter('date1', date_format(new \DateTime($annee . "-" . $i . "-1 00:00:00"), "Y-m-d H:i:s"));
                $qb->setParameter('date2', date_format(new \DateTime($annee . "-" . $i . "-31 23:59:59"), "Y-m-d H:i:s"));
                $qb->setParameter('validationUser', 1);
                $qb->setParameter('validation', 1);
                $enc = 0 + $qb->getQuery()->getSingleScalarResult();
                $resultCfChart[$i]["cmd-valide"] = $enc;

                $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('backOfficeBundle:commande');

                $qb = $repo->createQueryBuilder('a');
                $qb->select('SUM(a.total)');
                $qb->where('a.dateCommande between :date1 and :date2 and a.validationUser = :validationUser and a.validation = :validation');
                $qb->setParameter('date1', date_format(new \DateTime($annee . "-" . $i . "-1 00:00:00"), "Y-m-d H:i:s"));
                $qb->setParameter('date2', date_format(new \DateTime($annee . "-" . $i . "-31 23:59:59"), "Y-m-d H:i:s"));
                $qb->setParameter('validationUser', 1);
                $qb->setParameter('validation', 0);
                $enc = 0 + $qb->getQuery()->getSingleScalarResult();
                $resultCfChart[$i]["cmd-invalide"] = $enc;

                $em = $this->getDoctrine()->getManager();

                $repository = $em->getRepository('backOfficeBundle:membre');
                $membre = $repository->findAll();

                $em = $this->getDoctrine()->getManager();

                $em = $this->getDoctrine()->getManager();


                $repository = $em->getRepository('backOfficeBundle:commande');
                $commande = $repository->findby(array("validationUser" => 1));

                $em = $this->getDoctrine()->getManager();

                $repository = $em->getRepository('backOfficeBundle:produitsite');
                $produisite = $repository->findAll();

                $em = $this->getDoctrine()->getManager();

                $repository = $em->getRepository('backOfficeBundle:admin');
                $admin = $repository->findAll();

            }
            return $this->render('@backOffice/Default/index1.html.twig', array("response" => $response, "user" => $session->get("user"), "resultFacList" => $resultCfChart, "year" => $annee, "years" => $listYear, "membre" => count($membre), "commande" => count($commande), "produisite" => count($produisite), "admin" => count($admin)));
        }
    }

    /**
     * @Route("/admin/")
     * @Template()
     */
    public function adminAction(Request $request)
    {
        $session = new Session();


        if ($session->get("connect") == "OK" && $session->get("user") != null) {
            return $this->redirect("/index1/");
        } else {
            $response = "";

            if ($request->getMethod() == "POST") {

                $email = $request->get("login");
                $pass = $request->get("pass");
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:admin');
                if ($email == "" || $pass == "") {
                    $response = "Veuillez renseinger le nom d'utilisateur et le mot de passe";
                } else {
                    $ent = $repository->findOneby(array("email" => $email, "password" => md5($pass)));
                    if ($ent) {
                        $u = clone $ent;
                        $session->set("connect", "OK");
                        $session->set("user", $u);
                        $ent->setDernierecnx(new \DateTime());
                        $em->flush();

                        return $this->redirect("/index1/");

                    } else {
                        $response = "Nom d'utilisateur ou mot de passe incorrect";
                    }
                }
            }
            return $this->render('@backOffice/Default/admin.html.twig', array("response" => $response));
        }

    } 

    /**
     * @Route("/deconnect-admin/")
     * @Template()
     */
    public function deconnectAction()
    {
        $session = new Session();
        $session->set("connect", "NO");
        $session->set("user", null);
        return $this->Redirect('/admin/');
    }


    /**
     * @Route("/getsouscategorie/")
     * @Template()
     */
    public function getSousCategorieAction()
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            if (isset($_GET['id'])) {
                $em = $this->getDoctrine()->getManager();

                $rep = $em->getRepository('backOfficeBundle:souscategorie');
                $cat = $rep->findByIdcategorie($_GET['id']);
                $response = null;
                if (count($cat) > 0) {
                    for ($i = 0; $i < count($cat); $i++) {
                        $response[$i]["id"] = $cat[$i]->getId();
                        $response[$i]["nom"] = $cat[$i]->getNom();
                    }
                }

                $res = new JsonResponse();
                return $res->setData(array("response" => $response));
            }
        }
    }



    /**
     * @Route("/add-images/")
     * @Template()
     */
    public function addImageAction()
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            if (!isset($_GET["id"])) {
                return $this->redirect("/add-product-site/");
            }
            $em = $this->getDoctrine()->getManager();
            $rep = $em->getRepository('backOfficeBundle:produitsite');
            $produits = $rep->findOneById($_GET["id"]);

            if (!$produits) {
                return $this->redirect("/add-product-site/");
            }
            return $this->render('@backOffice/Default/addImage.html.twig', array("user" => $session->get("user"), "id" => $_GET["id"]));

        }
    }

    //------------------- MINIATURE ------------------------//

    public function createMiniature($filepath, $thumbpath, $thumbnail_width, $thumbnail_height)
    {

        list($original_width, $original_height, $original_type) = getimagesize('.' . $filepath);
        if ($original_width > $original_height) {
            $new_width = $thumbnail_width;
            $new_height = intval($original_height * $new_width / $original_width);
        } else {
            $new_height = $thumbnail_height;
            $new_width = intval($original_width * $new_height / $original_height);
        }
        /*$new_width = $thumbnail_width;
        $new_height = $thumbnail_height;
        $dest_x = intval(($thumbnail_width - $new_width) / 2);
        $dest_y = intval(($thumbnail_height - $new_height) / 2);*/

        if ($original_type === 1) {
            $imgt = "ImageGIF";
            $imgcreatefrom = "ImageCreateFromGIF";
        } else if ($original_type === 2) {
            $imgt = "ImageJPEG";
            $imgcreatefrom = "ImageCreateFromJPEG";
        } else if ($original_type === 3) {
            //$imgt = "ImagePNG";
            $imgt = "ImageJPEG";
            $imgcreatefrom = "ImageCreateFromPNG";
        } else {
            return false;
        }

        $old_image = $imgcreatefrom('.' . $filepath);
        $new_image = imagecreatetruecolor($new_width, $new_height);
        if ($original_type === 3) {
            $kek = imagecolorallocate($new_image, 255, 255, 255);
            imagefill($new_image, 0, 0, $kek);
        }
        imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);
        $imgt($new_image, '.' . $thumbpath);
        return true;
    }



    //--------------------------fileupload--------------------------------------//

    /**
     * @Route("/file-upload/")
     * @Template()
     */
    public function fileuploadAction(Request $request)
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {

            $response = "NO";
            $storeFolder = 'Bundle/ST/backoffice/images/uploads_produits/';   //2
            $storeFolderThumbs = 'Bundle/ST/backoffice/images/uploads_produits_thumbs/';   //2

            if (!empty($_FILES)) {

                $tempFile = $_FILES['file']['tmp_name'];          //3
                $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                $nomImage = md5(uniqid()) . '.' . $extension;
                $nomImageThumb = md5(uniqid()) . '_thumb.' . $extension;
                //$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
                $targetPath = $storeFolder;
                //$targetFile =  $targetPath. $_FILES['file']['name'];  //5
                $targetFile = $targetPath . $nomImage;  //5

                $targetFileThumb = $storeFolderThumbs . $nomImageThumb;  //5
                $response = "OK";
                if (!move_uploaded_file($tempFile, $targetFile)) {
                    $response = "NOO";
                } else {

                    $this->createMiniature("/" . $targetFile, "/" . $targetFileThumb, 265, 230);

                    $em = $this->getDoctrine()->getManager();
                    $images = new images();
                    $images->setUrlimg("/" . $targetFile);
                    $images->setUrlimgmin("/" . $targetFileThumb);
                    $images->setIdProduct($_GET["id"]);
                    $em->persist($images);
                    $em->flush();
                    $response = $images->getId();

                }

            }
            return new \Symfony\Component\HttpFoundation\Response($response);
        }
    }


    /**
     * @Route("/add-product-site/")
     * @Template()
     */
    public function addProductSiteAction()
    {
        $this->verifierSession("ADDPST");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $em = $this->getDoctrine()->getManager();

            $repository = $em->getRepository('backOfficeBundle:categorie');
            $categorie = $repository->findAll();

            $repository = $em->getRepository('backOfficeBundle:attribute_color');
            $colors = $repository->findAll();

            return $this->render('@backOffice/Default/addProductSite.html.twig', array("user" => $session->get("user"), "categorie" => $categorie, "colors" => $colors));


    }

    //-----------------------deleteImage-------------------------//

    /**
     * @Route("/delete-image/")
     * @Template()
     */
    public function deleteimageAction()
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            $response = "NO";
            $id = $_GET['id'];
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:images');
            $images = $repository->findOneById($id);
            if ($images) {
                if ($images->getUrlimg() != "") {
                    if (file_exists("." . $images->getUrlimg())) {
                        unlink("." . $images->getUrlimg());
                    }
                }

                if ($images->getUrlimgmin() != "") {
                    if (file_exists("." . $images->getUrlimgmin())) {
                        unlink("." . $images->getUrlimgmin());
                    }
                }
                $em->remove($images);
                $em->flush();
                $response = "OK";
            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }
    }
//--------------------------update------------------------------------//

    /**
     * @Route("/update-product-db-site/")
     * @Template()
     */
    public function updateProductDbSiteAction(Request $request)
    {

        $this->verifierSession("MOPST");

            $this->verifierSession("MOPST");
            $categorie = $request->get("sc");
            $titre = $request->get("titre");
            $description = $request->get("description");
            $video = $request->get("video");
            $disp = $request->get("disp");

            if (empty($video))
                $video = "";

            $response = "";
            if (!isset($categorie) || !isset($titre) || !isset($description)) {
                $response = "Tous les champs sont obligatoires !";
            } else if (empty($titre) || empty($description)) {
                $response = "Tous les champs sont obligatoires !";
            } else if (empty($categorie) || $categorie == "--") {
                $response = "Veuillez selectionner une catégorie";
            } else {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:produitsite');
                $produitSite = $repository->findOneById($_GET["id"]);

                if ($produitSite) {
                    $produitSite->setDescription($description);
                    $produitSite->setTitre($titre);
                    $produitSite->setLibelle(0);
                    $produitSite->setIdCategorie($categorie);

                    $produitSite->setVideo($video);

                    if ($disp == "oui") {
                        $produitSite->setDisp(1);
                    } elseif ($disp == "non") {
                        $produitSite->setDisp(0);
                    }
                    $em->persist($produitSite);
                    $em->flush();

                    if (isset($_POST["colors"])) {
                        $colors = $_POST["colors"];

                        //----- delete all color before ----

                        $repository = $em->getRepository('backOfficeBundle:color_product');
                        $colorsProduct = $repository->findByIdProduct($produitSite->getId());

                        for ($i = 0; $i < count($colorsProduct); $i++) {

                            $em->remove($colorsProduct[$i]);

                        }

                        $em->flush();//------ add color if exist -----//

                        for ($i = 0; $i < count($colors); $i++) {
                            if ($colors[$i] != 0) {
                                $repository = $em->getRepository('backOfficeBundle:attribute_color');
                                $col = $repository->findOneById($colors[$i]);
                                if ($col) {
                                    $color = new color_product();
                                    $color->setCode($col->getCode());
                                    $color->setTitle($col->getTitle());
                                    $color->setIdProduct($produitSite->getId());

                                    $em->persist($color);
                                }
                            }
                        }
                    }
                    $em->flush();
                    $response = "OK";
                } else {
                    $response = "Une erreur s'est produite !";
                }
            }

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }


    /**
     * @Route("/update-product-site/")
     * @Template()
     */
    public function updateProductSiteAction()
    {
        $this->verifierSession("MOPST");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            if (!isset($_GET["id"])) {
                return $this->redirect("/list-product-site/");
            }
            $this->verifierSession("MOPST");
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:produitsite');
            $product = $repository->findOneById($_GET["id"]);

            if (!$product) {
                return $this->redirect("/list-product-site/");
            }

            $repository = $em->getRepository('backOfficeBundle:categorie');
            $categorie = $repository->findAll();


            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $souscategorie = $repository->findOneById($product->getIdcategorie());

            //-----categorie selectione
            $repository = $em->getRepository('backOfficeBundle:categorie');
            $cat = $repository->findOneById($souscategorie->getIdcategorie());

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $souscategories = $repository->findByIdcategorie($cat->getId());

            /*$repository = $em->getRepository('backOfficeBundle:sous_sous_categorie');
            $soussouscategorie = $repository->findOneById($product->getIdSousSousCategorie());

            $repository = $em->getRepository('backOfficeBundle:sous_sous_categorie');
            $soussouscategories = $repository->findByIdsouscategorie($souscategorie->getId());*/

            $repository = $em->getRepository('backOfficeBundle:images');
            $images = $repository->findByIdProduct($_GET["id"]);


            $repository = $em->getRepository('backOfficeBundle:attribute_color');
            $colors = $repository->findAll();

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $colorsProduct = $repository->findByIdProduct($_GET["id"]);

            return $this->render('@backOffice/Default/updateProductSite.html.twig', array( "user" => $session->get("user"), "categorie" => $categorie, "souscategorie" => $souscategorie, "souscategories" => $souscategories, "soussouscategorie" => null, "soussouscategories" => null, "produit" => $product, "images" => $images, "colors" => $colors, "colorProduct" => $colorsProduct));


    }

    /**
     * @Route("/add-product-db-site/")
     * @Template()
     */
    public function addProductDbSiteAction(Request $request)
    {
        $this->verifierSession("ADDPST");


            $categorie = $request->get("sc");
            $sousouscategorie = $request->get("ssc");
            $titre = $request->get("titre");
            $libelle = $request->get("libelle");
            $description = $request->get("description");
            $video = $request->get("video");
            $disp = $request->get("disp");

            $prixPromotion = 0;

            $response = "";
            if (!isset($categorie) || !isset($titre) || !isset($description) /*|| !isset($prixSite)*/) {
                $response = "Tous les champs sont obligatoires !";
            } else if (empty($titre) || empty($description)) {
                $response = "Tous les champs sont obligatoires !";
            } else if (empty($categorie) || $categorie == "--") {
                $response = "Veuillez selectionner une catégorie";
            }
            if($response=="")
            {
                $em = $this->getDoctrine()->getManager();

                $produitSite = new produitsite();
                $produitSite->setDateAjout(new \DateTime());
                $produitSite->setDescription($description);
                $produitSite->setTitre($titre);
                $produitSite->setLibelle(0);
                $produitSite->setRef("");
                $produitSite->setIdCategorie($categorie);
                //$produitSite->setPrix($prixSite);
                if ($disp == "oui") {
                    $produitSite->setDisp(1);
                } elseif ($disp == "non") {
                    $produitSite->setDisp(0);
                }

                $produitSite->setVideo(0);

                $em->persist($produitSite);
                $em->flush();

                $ref = "#P-" . $produitSite->getId() . "/" . date_format($produitSite->getDateAjout(), "md");

                $produitSite->setRef($ref);
                $em->flush();

                $idP = $produitSite->getId();

                if (isset($_POST["colors"])) {
                    //------ add color if exist -----//
                    $colors = $_POST["colors"];
                    for ($i = 0; $i < count($colors); $i++) {
                        if ($colors[$i] != 0) {
                            $repository = $em->getRepository('backOfficeBundle:attribute_color');
                            $col = $repository->findOneById($colors[$i]);
                            if ($col) {
                                $color = new color_product();
                                $color->setCode($col->getCode());
                                $color->setTitle($col->getTitle());
                                $color->setIdProduct($idP);

                                $em->persist($color);
                            }
                        }
                    }
                }
                $em->flush();
                $response = "OK-" . $idP;
            }


            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }

    /**
     * @Route("/addInfoProduit_db/")
     * @Template()
     */
    public function addInfoProduit_dbAction(Request $request)
    {

        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            $em = $this->getDoctrine()->getManager();
            $response = "";
            if ($request->getMethod() == 'POST') {


                $valeur_taille = $request->get("valeur_taille");
                $taille = $request->get("taille");
                $prixSite = $request->get("prixSite");
                $prixPromotion = $request->get("prixPromotion");
                $addCarac = $request->get("addCarac");
                $Longeur = $request->get("Longeur");
                $Largeur = $request->get("Largeur");
                $Hauteur = $request->get("Hauteur");
                $Poids = $request->get("Poids");
                $Puissance = $request->get("Puissance");
                $qte = $request->get("qte");

                $rep = $em->getRepository('backOfficeBundle:produit_info');
                $produit = $rep->findOneBy(array("idProduit" => $_GET["id"], "titleTaille" => $taille, "valeurTaille" => $valeur_taille));

                if ($produit) {
                    $response = "Ce produit et deja existe !";
                } else {
                    if ($taille == "vide") {
                        if (empty($prixPromotion))
                            $prixPromotion = 0;
                        if (!isset($prixSite)) {
                            $response = "Champ de prix obligatoire !";
                        } else {
                            if ($prixSite <= 0) {
                                $response = "Le prix ne peux pas être negatif !";
                            } else {
                                if ($prixPromotion < 0) {
                                    $response = "Le prix de promotion ne peux pas être negatif !";
                                } else {
                                    $em = $this->getDoctrine()->getManager();

                                    $infoProduit = new produit_info();
                                    $infoProduit->setIdProduit($_GET["id"]);
                                    $infoProduit->setTitleTaille("-");
                                    $infoProduit->setValeurTaille($valeur_taille);
                                    $infoProduit->setPrix($prixSite);
                                    $infoProduit->setNewPrix($prixPromotion);
                                    $infoProduit->setQteStock($qte);
                                    if ($addCarac == 1) {
                                        $infoProduit->setLongeur($Longeur);
                                        $infoProduit->setLargeur($Largeur);
                                        $infoProduit->setPuissance("");
                                        $infoProduit->setPoids($Poids);
                                        $infoProduit->setHauteur($Hauteur);
                                    }

                                    $em->persist($infoProduit);

                                    $repository = $em->getRepository('backOfficeBundle:produitsite');
                                    $prod = $repository->find($_GET["id"]);
                                    if ($prod) {
                                        $prodPrix = $prod->getPrix();
                                        if ($prodPrix == "" || $prixSite < $prodPrix) {
                                            $prod->setPrix($prixSite);
                                        }
                                    }
                                    $em->flush();
                                }
                            }
                        }
                    }
                    if ($taille != "vide") {
                        if (empty($prixPromotion))
                            $prixPromotion = 0;

                        if (!isset($prixSite)) {
                            $response = "Champ de prix obligatoire !";
                        } else {
                            if ($prixSite <= 0) {
                                $response = "Le prix ne peux pas être negatif !";
                            } else {
                                if ($prixPromotion < 0) {
                                    $response = "Le prix de promotion ne peux pas être negatif !";
                                } else {

                                    $em = $this->getDoctrine()->getManager();
                                    $infoProduit = new produit_info();
                                    $infoProduit->setIdProduit($_GET["id"]);
                                    $infoProduit->setTitleTaille($taille);
                                    $infoProduit->setValeurTaille($valeur_taille);
                                    $infoProduit->setPrix($prixSite);
                                    $infoProduit->setNewPrix($prixPromotion);
                                    $infoProduit->setQteStock($qte);
                                    if ($addCarac == 1) {
                                        $infoProduit->setLongeur($Longeur);
                                        $infoProduit->setLargeur($Largeur);
                                        $infoProduit->setPuissance("");
                                        $infoProduit->setPoids($Poids);
                                        $infoProduit->setHauteur($Hauteur);
                                    }
                                    $em->persist($infoProduit);

                                    $repository = $em->getRepository('backOfficeBundle:produitsite');
                                    $prod = $repository->find($_GET["id"]);
                                    if ($prod) {
                                        $prodPrix = $prod->getPrix();
                                        if ($prodPrix == "" || $prixSite < $prodPrix) {
                                            $prod->setPrix($prixSite);
                                        }
                                    }

                                    $em->flush();
                                    $response = "OK";
                                }
                            }
                        }
                    }
                }
            }

            $rep = $em->getRepository('backOfficeBundle:Tailles');
            $Tailles = $rep->findAll();

            $rep = $em->getRepository('backOfficeBundle:produit_info');
            $iproduit = $rep->findby(array("idProduit" => $_GET["id"]));

            $rep = $em->getRepository('backOfficeBundle:produitsite');
            $produit = $rep->findby(array("id" => $_GET["id"]));

            return $this->render('@backOffice/Default/addInfoProduit.html.twig', array("Tailles" => $Tailles, "user" => $session->get("user"), "response" => $response, "iproduits" => $iproduit, "produit" => $produit, "id" => $_GET["id"]));
        }
    }

    /**
     * @Route("/updateProductSiteInfo/")
     * @Template()
     */
    public function updateProductSiteInfoAction(Request $request)
    {

        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            $em = $this->getDoctrine()->getManager();
            $response = "";
            if ($request->getMethod() == 'POST') {

                $taille = $request->get("taille");
                $valeur_taille = $request->get("valeur_taille");
                $prixSite = $request->get("prixSite");
                $prixPromotion = $request->get("prixPromotion");
                $addCarac = $request->get("addCarac");
                $Longeur = $request->get("Longeur");
                $Largeur = $request->get("Largeur");
                $Hauteur = $request->get("Hauteur");
                $Poids = $request->get("Poids");
                $Puissance = $request->get("Puissance");
                $qte = $request->get("qte");

                if ($taille == "vide") {
                    if (empty($prixPromotion))
                        $prixPromotion = 0;

                    if (!isset($prixSite)) {
                        $response = "Champ de prix obligatoire !";
                    } else {
                        if ($prixSite <= 0) {
                            $response = "Le prix ne peux pas être negatif !";
                        } else {
                            if ($prixPromotion < 0) {
                                $response = "Le prix de promotion ne peux pas être negatif !";
                            } else {

                                $em = $this->getDoctrine()->getManager();
                                $infoProduit = new produit_info();
                                $infoProduit->setIdProduit($_GET["id"]);
                                $infoProduit->setTitleTaille("-");
                                $infoProduit->setValeurTaille($valeur_taille);
                                $infoProduit->setPrix($prixSite);
                                $infoProduit->setNewPrix($prixPromotion);
                                $infoProduit->setQteStock($qte);
                                if ($addCarac == 1) {
                                    $infoProduit->setLongeur($Longeur);
                                    $infoProduit->setLargeur($Largeur);
                                    $infoProduit->setPuissance("");
                                    $infoProduit->setPoids($Poids);
                                    $infoProduit->setHauteur($Hauteur);
                                }
                                $em->persist($infoProduit);

                                $repository = $em->getRepository('backOfficeBundle:produitsite');
                                $prod = $repository->find($_GET["id"]);
                                if ($prod) {
                                    $prodPrix = $prod->getPrix();
                                    if ($prodPrix == "" || $prixSite < $prodPrix) {
                                        $prod->setPrix($prixSite);
                                    }
                                }
                                $em->flush();
                            }
                        }
                    }
                }
                if ($taille != "vide") {
                    if (empty($prixPromotion))
                        $prixPromotion = 0;

                    if (!isset($prixSite)) {
                        $response = "Champ de prix obligatoire !";
                    } else {
                        if ($prixSite <= 0) {
                            $response = "Le prix ne peux pas être negatif !";
                        } else {
                            if ($prixPromotion < 0) {
                                $response = "Le prix de promotion ne peux pas être negatif !";
                            } else {

                                $em = $this->getDoctrine()->getManager();
                                $infoProduit = new produit_info();
                                $infoProduit->setIdProduit($_GET["id"]);
                                $infoProduit->setTitleTaille($taille);
                                $infoProduit->setValeurTaille($valeur_taille);
                                $infoProduit->setPrix($prixSite);
                                $infoProduit->setNewPrix($prixPromotion);
                                $infoProduit->setQteStock($qte);
                                if ($addCarac == 1) {
                                    $infoProduit->setLongeur($Longeur);
                                    $infoProduit->setLargeur($Largeur);
                                    $infoProduit->setPuissance("");
                                    $infoProduit->setPoids($Poids);
                                    $infoProduit->setHauteur($Hauteur);
                                }
                                $em->persist($infoProduit);
                                $repository = $em->getRepository('backOfficeBundle:produitsite');
                                $prod = $repository->find($_GET["id"]);
                                if ($prod) {
                                    $prodPrix = $prod->getPrix();
                                    if ($prodPrix == "" || $prixSite < $prodPrix) {
                                        $prod->setPrix($prixSite);
                                    }
                                }
                                $em->flush();
                                $response = "OK";
                            }
                        }
                    }
                }
            }


            $rep = $em->getRepository('backOfficeBundle:Tailles');
            $Tailles = $rep->findAll();

            $rep = $em->getRepository('backOfficeBundle:produit_info');
            $iproduit = $rep->findby(array("idProduit" => $_GET["id"]));

            $rep = $em->getRepository('backOfficeBundle:produitsite');
            $produit = $rep->findby(array("id" => $_GET["id"]));

            return $this->render('@backOffice/Default/updateProductSiteInfo.html.twig', array("Tailles" => $Tailles, "user" => $session->get("user"), "response" => $response, "iproduits" => $iproduit, "produit" => $produit, "id" => $_GET["id"]));
        }
    }

    /**
     * @Route("/suivant/")
     * @Template()
     */
    public function suivantAction(Request $request)
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {

            $id = $request->get('id');
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $produit_info = $repository->findby(array("idProduit" => $id));

            if ($produit_info) {
                $response = "success";
            } else {
                $response = "";
            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }
    }

    /**
     * @Route("/delete-info-produit/")
     * @Template()
     */
    public function deleteInfoProduitAction()
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            $response = "NO";

            $id = $_GET['id'];
            $idTaille = $_GET['taille'];
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $produit_info = $repository->findOneById($id);
            if ($produit_info) {
                $em->remove($produit_info);
                $em->flush();
                $response = "OK!";
            }

            $repository = $em->getRepository('backOfficeBundle:panier');
            $taille = $repository->findOneBy(array("id" => $id, "titleTaille" => $idTaille));
            if ($taille) {
                $em->remove($taille);
                $em->flush();
                $response = "OK!";
            }
            if ($produit_info) {
                $idProduitSite = $produit_info->getIdProduit();

                $repository = $em->getRepository('backOfficeBundle:produit_info');
                $produitsite = $repository->findOneBy(array("idProduit" => $idProduitSite), array("prix" => "ASC"));
                if ($produitsite) {
                    $prixProduit = $produitsite->getPrix();

                    $repository = $em->getRepository('backOfficeBundle:produitsite');
                    $prod = $repository->find($idProduitSite);
                    if ($prod) {
                        $prod->setPrix($prixProduit);
                        $em->flush();
                        $response = "OK!";
                    }
                } else {

                    $repository = $em->getRepository('backOfficeBundle:produitsite');
                    $prod = $repository->find($idProduitSite);
                    if ($prod) {
                        $prod->setPrix(null);
                        $em->flush();
                        $response = "OK!";
                    }
                }
            }


            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }
    }

    /**
     * @Route("/notificationHeader/")
     * @Template()
     */
    public function notificationHeaderAction()
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {

            $em = $this->getDoctrine()->getManager();


            $repository = $em->getRepository('backOfficeBundle:commande');
            $cmd = $repository->findby(array("validation" => 0, "validationUser" => 1));

            return $this->render('@backOffice/Default/notificationHeader.html.twig', array("user" => $session->get("user"), "cmd" => count($cmd)));

        }
    }

    /**
     * @Route("/notifications/")
     * @Template()
     */
    public function notificationAction()
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {

            $em = $this->getDoctrine()->getManager();

            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('backOfficeBundle:produits');

            $qb = $repo->createQueryBuilder('a');
            $qb->select('a');
            $qb->where('a.qte <= 2');

            /*
            $qb->setParameter('etat', "Envoyée");
            */

            $stock = $qb->getQuery()->getResult();

            $rep = $em->getRepository('backOfficeBundle:commande');

            $qb = $rep->createQueryBuilder('n');
            $qb->select('n')
                ->where("n.validationUser = :validationUser AND n.total >:total AND n.validation = :validation")
                ->setParameter('validationUser', 1)
                ->setParameter('validation', 0)
                ->setParameter('total', 0)
                ->orderBy('n.id', 'DESC');
            $commande = $qb->getQuery()->getResult();
            //$commande = $rep->findBy(array('validationUser'=>1),array('id'=>'DESC'));

            $reponse = array();
            for ($i = 0; $i < count($commande); $i++) {
                $reponse[$i]['commande'] = $commande[$i];
                $rep = $em->getRepository('backOfficeBundle:membre');
                $reponse[$i]['membre'] = $rep->findOneById($commande[$i]->getIdMembre());
            }

            return $this->render('@backOffice/Default/notification.html.twig', array("produits" => $stock, "user" => $session->get("user"), "response" => "", "commande" => $reponse));

        }
    }

    /**
     * @Route("/list-commandes/")
     * @Template()
     */
    public function listeCommandeAction(Request $request)
    {
        $this->verifierSession("CONSC");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $reponse = array();
            $em = $this->getDoctrine()->getManager();
            $rep = $em->getRepository('backOfficeBundle:commande');

            $qb = $rep->createQueryBuilder('n');
            $qb->select('n')
                ->where("n.validationUser = :validationUser ")
                ->setParameter('validationUser', 1)
                //->setParameter('total', 0)
                ->orderBy('n.id', 'DESC');
            $commande = $qb->getQuery()->getResult();
            //$commande = $rep->findBy(array('validationUser'=>1),array('id'=>'DESC'));

            for ($i = 0; $i < count($commande); $i++) {
                $reponse[$i]['commande'] = $commande[$i];
                $rep = $em->getRepository('backOfficeBundle:membre');
                $reponse[$i]['membre'] = $rep->findOneById($commande[$i]->getIdMembre());
            }

            $response = "";

            return $this->render('@backOffice/Default/notification.html.twig', array("commande" => $reponse, "user" => $session->get("user")));


    }

    /**
     * @Route("/detail-commande/")
     * @Template()
     */
    public function detailCommandeAction(Request $request)
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            if (!isset($_GET["id"])) {
                return $this->Redirect('/list-commandes/');
            }
            $id = $_GET["id"];
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:commande');
            $commande = $repository->findOneById($id);

            $repository = $em->getRepository('backOfficeBundle:membre');
            $membre = $repository->findOneById($commande->getIdmembre());

            $repository = $em->getRepository('backOfficeBundle:panier');
            $panier = $repository->findByIdCommande($id);

            $detail = array();
            for ($i = 0; $i < count($panier); $i++) {
                $detail[$i]["quantite"] = $panier[$i]->getQuantite();
                $repository = $em->getRepository('backOfficeBundle:produitsite');
                $article = $repository->findOneById($panier[$i]->getIdProduitsite());
                if($article)
                {
                    $detail[$i]["article"] = $article;
                    $v = $panier[$i]->getValeurTaille();
                    if ($v) {
                        $repository = $em->getRepository('backOfficeBundle:produit_info');
                        $article1 = $repository->findOneBy(array("idProduit" => $panier[$i]->getIdProduitsite(), "titleTaille" => $panier[$i]->getTitleTaille(), "valeurTaille" => $panier[$i]->getValeurTaille()));

                        $detail[$i]["article1"] = $article1;
                    } else {
                        $repository = $em->getRepository('backOfficeBundle:produit_info');
                        $article1 = $repository->findOneBy(array("idProduit" => $panier[$i]->getIdProduitsite(), "titleTaille" => $panier[$i]->getTitleTaille()));

                        $detail[$i]["article1"] = $article1;
                    }


                    $repository = $em->getRepository('backOfficeBundle:images');
                    $image = $repository->findByIdProduct($article->getId());
                    $detail[$i]["image"] = "";
                    if ($image) {
                        $detail[$i]["image"] = $image[0]->getUrlimgmin();
                    }
                    //------------promo ------------
                    if ($article1->getNewPrix() == 0 || $article1->getNewPrix() > $article1->getPrix()) {
                        $detail[$i]["promo"] = "";
                    } else {
                        $detail[$i]["promo"] = $article1->getNewPrix();
                    }
                    $detail[$i]["color"] = $panier[$i]->getCode();
                    $detail[$i]["titre"] = $panier[$i]->getTitre();
                }
                else
                {
                    $detail[$i]["article"] = "";
                    $detail[$i]["valeurTaille"] = $panier[$i]->getValeurTaille();
                    $detail[$i]["titleTaille"] = $panier[$i]->getTitleTaille();

                    $detail[$i]["image"] = "";

                    $detail[$i]["prix"] = $panier[$i]->getPrix();
                    $detail[$i]["titre"] = $panier[$i]->getTitre();
                    $detail[$i]["color"] = $panier[$i]->getCode();
                }

            }

            if ('POST' === $request->getMethod()) {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:commande');
                $commande = $repository->findOneById($id);
                if ($request->get("validation") == 1) {
                    $commande->setValidation(1);

                } else {
                    $commande->setValidation(0);
                }
                $em->flush();
                return $this->redirect("/list-commandes/");
            }

            return $this->render('@backOffice/Default/detailCommande.html.twig', array("membre" => $membre, "detail" => $detail, "commande" => $commande, "user" => $session->get("user")));
        }
    }

    /**
     * @Route("/deletecommande/")
     * @Template()
     */
    public function deleteCommandeAction()
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");

        } else {

            if (!isset($_GET["id"])) {
                return $this->Redirect('/list-commandes/');
            }
            $id = $_GET["id"];
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:commande');
            $commande = $repository->findOneById($id);
            $repository = $em->getRepository('backOfficeBundle:panier');
            $panier = $repository->findByIdCommande($id);
            for ($i = 0; $i < count($panier); $i++) {
                $em->remove($panier[$i]);
                $em->flush();
            }
            if ($commande) {
                $em->remove($commande);
            }

            $em->flush();
            $response = "OK";
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }
    }

    /**
     * @Route("/list-product-site/")
     * @Template()
     */
    public function listProductSiteAction(Request $request)
    {
        $this->verifierSession("CONSPST");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $em = $this->getDoctrine()->getManager();
            $rep = $em->getRepository('backOfficeBundle:produitsite');
            $produits = $rep->findAll();

            $rep = $em->getRepository('backOfficeBundle:produit_info');
            $iproduits = $rep->findAll();

            $sousCat = $request->get("sousCat");
            $soussousCat = $request->get("soussousCat");

            if (isset($sousCat) && !empty($sousCat)) {
                $rep = $em->getRepository('backOfficeBundle:produitsite');
                $produits = $rep->findByIdCategorie($sousCat);
            }

            if (isset($soussousCat) && !empty($soussousCat)) {
                $rep = $em->getRepository('backOfficeBundle:produitsite');
                $produits = $rep->findByIdSousSousCategorie($soussousCat);
            }

            if ($request->getMethod() == "POST") {
                $titre = $request->get("titre");

                if (!empty($titre)) {
                    $repo = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('backOfficeBundle:produitsite');

                    $qb = $repo->createQueryBuilder('a');
                    $qb->select('a');
                    $qb->where('a.titre LIKE :titre');
                    $qb->setParameter('titre', '%' . $titre . "%");

                    $produits = $qb->getQuery()->getResult();
                }
            }
            return $this->render('@backOffice/Default/listProductSite.html.twig', array("iproduit" => $iproduits, "produits" => $produits, "user" => $session->get("user")));

    }

    /**
     * @Route("/list-product-site-promotion/")
     * @Template()
     */
    public function listProductSitePromotionAction(Request $request)
    {
        $this->verifierSession("CONSPP");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $em = $this->getDoctrine()->getManager();
            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('backOfficeBundle:produit_info');

            $qb = $repo->createQueryBuilder('a');
            $qb->select('a');
            $qb->where(' a.prix > a.newPrix and a.newPrix > 0');
            $produits = $qb->getQuery()->getResult();

            $repository = $em->getRepository('backOfficeBundle:produitsite');
            $iproduits = $repository->findAll();


            return $this->render('@backOffice/Default/listProductSitePromotion.html.twig', array("iproduits" => $iproduits, "produits" => $produits, "user" => $session->get("user")));

    }

    /**
     * @Route("/delete-product-site/")
     * @Template()
     */
    public function deleteProductSiteAction(Request $request)
    {
        $this->verifierSession("SUPPST");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $id = $request->get("id");
            $response = "";
            if ($id == "") {
                return $this->Redirect('/list-product-site/');
            }

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:produitsite');
            $produit = $repository->findOneById($id);

            if (!$produit) {
                return $this->Redirect('/list-product-site/');
            }


            $repository = $em->getRepository('backOfficeBundle:images');
            $image = $repository->findByIdProduct($id);
            for ($i = 0; $i < count($image); $i++) {
                if (file_exists("." . $image[$i]->getUrlimg())) {
                    unlink("." . $image[$i]->getUrlimg());
                }

                if (file_exists("." . $image[$i]->getUrlimgmin())) {
                    unlink("." . $image[$i]->getUrlimgmin());
                }

                $em->remove($image[$i]);

            }

            if ($produit->getNewPrix() != 0 && ($produit->getNewPrix() < $produit->getPrix())) {
                $prix = $produit->getNewPrix();
            } else {
                $prix = $produit->getPrix();
            }


            $repository = $em->getRepository('backOfficeBundle:panier');
            $pan = $repository->findByIdProduitsite($id);
            $total = array();
            $idCommandes = array();
            for ($i = 0; $i < count($pan); $i++)
            {
                $repository = $em->getRepository('backOfficeBundle:commande');
                $commande = $repository->findOneById($pan[$i]->getIdCommande());
                if($commande->getValidationUser()==0)
                {
                    $total[$i] = $prix * $pan[$i]->getQuantite();
                    $idCommandes[$i] = $pan[$i]->getIdCommande();
                    $em->remove($pan[$i]);
                }
                else
                {
                    $pan[$i]->setIdProduitsite(0);
                }
            }

            for ($i = 0; $i < count($total); $i++) {
                $repository = $em->getRepository('backOfficeBundle:commande');
                $commande = $repository->findOneById($idCommandes[$i]);
                $old = $commande->getTotal();
                $new = $old - $total[$i];
                $commande->setTotal($new);
            }

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $colors = $repository->findByIdProduct($id);
            for ($i = 0; $i < count($colors); $i++) {
                $em->remove($colors[$i]);
            }

            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $produitInfo = $repository->findByIdProduit($id);
            for ($i = 0; $i < count($produitInfo); $i++) {
                $em->remove($produitInfo[$i]);
            }


            $em->remove($produit);
            $em->flush();
            $response="OK";


            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }


    /**
     * @Route("/slider/")
     * @Template()
     */
    public function sliderAction(Request $request)
    {
        $this->verifierSession("ADDS");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $em = $this->getDoctrine()->getManager();

            $response = "";
            if ($request->getMethod() == "POST") {
                if ($_POST["formName"] == "addMarque") {
                    $urlSlider = $request->get('lien');
                    $titre = $request->get('titre');
                    $text = $request->get('text');

                    //---------LOGO UPDATE---------
                    $response = "OK";
                    define('TARGET', './Bundle/ST/backoffice/images/slider/');    // Repertoire cible
                    define('MAX_SIZE', 1000000000);    // Taille max en octets du fichier
                    define('WIDTH_MAX', 2800);    // Largeur max de l'image en pixels
                    define('HEIGHT_MAX', 2800);    // Hauteur max de l'image en pixels

                    // Tableaux de donnees
                    $tabExt = array('jpg', 'gif', 'png', 'jpeg');    // Extensions autorisees
                    $infosImg = array();

                    // Variables
                    $extension = '';
                    $message = '';
                    $nomImage = '';
                    if (!empty($_FILES['fichier']['name'])) {
                        // Recuperation de l'extension du fichier
                        $extension = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);

                        // On verifie l'extension du fichier
                        if (in_array(strtolower($extension), $tabExt)) {
                            // On recupere les dimensions du fichier
                            $infosImg = getimagesize($_FILES['fichier']['tmp_name']);

                            // On verifie le type de l'image
                            if ($infosImg[2] >= 1 && $infosImg[2] <= 14) {
                                // On verifie les dimensions et taille de l'image
                                if (($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['fichier']['tmp_name']) <= MAX_SIZE)) {
                                    // Parcours du tableau d'erreurs
                                    if (isset($_FILES['fichier']['error'])
                                        && UPLOAD_ERR_OK === $_FILES['fichier']['error']
                                    ) {
                                        // On renomme le fichier
                                        $nomImage = md5(uniqid()) . '.' . $extension;

                                        // Si c'est OK, on teste l'upload
                                        if (move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET . $nomImage)) {
                                            $url = "/Bundle/ST/backoffice/images/slider/" . $nomImage;

                                            $slide = new slider();
                                            $slide->setTitre($titre);
                                            $slide->setOrderSlider(1);
                                            $slide->setText($text);
                                            $slide->setUrlImage($url);
                                            $slide->setUrlSlider(1);
                                            $slide->setActif(1);
                                            $em->persist($slide);
                                            $em->flush();
                                            $response = "OK";
                                        } else {
                                            // Sinon on affiche une erreur systeme
                                            $response = 'Problème lors de l\'upload !';
                                        }
                                    } else {
                                        $response = 'Une erreur interne a empêché l\'uplaod de l\'image';
                                    }
                                } else {
                                    // Sinon erreur sur les dimensions et taille de l'image
                                    $response = 'Erreur dans les dimensions de l\'image !';
                                }
                            } else {
                                // Sinon erreur sur le type de l'image
                                $response = 'Le fichier à uploader n\'est pas une image !';
                            }
                        } else {
                            // Sinon on affiche une erreur pour l'extension
                            $response = 'L\'extension du fichier est incorrecte !';
                        }
                    }
                }
            }
            $rep = $em->getRepository('backOfficeBundle:slider');
            $slider = $rep->findAll();


            return $this->render('@backOffice/Default/slider.html.twig', array("slider" => $slider, "user" => $session->get("user"), "response" => $response));


    }

    /**
     * @Route("/delete-slide/")
     * @Template()
     */
    public function deleteSlideAction()
    {
        $this->verifierSession("SUPS");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $response = "NO";

            $id = $_GET['id'];
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:slider');
            $slide = $repository->findOneById($id);
            if ($slide) {
                if ($slide->getUrlImage() != "") {
                    unlink("." . $slide->getUrlImage());
                }

                $em->remove($slide);
                $em->flush();
                $response = "OK";
            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }


    /**
     * @Route("/colors/")
     * @Template()
     */
    public function addColorAction(Request $request)
    {
        $this->verifierSession("ADDCL");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $em = $this->getDoctrine()->getManager();
            $response = "";
            if ($request->getMethod() == "POST") {
                $title = $request->get("title");
                $code = $request->get("codeColor");

                if (empty($title) || empty($code)) {
                    $response = "Un des champs est vide !";
                } else {
                    $colorN = new attribute_color();
                    $colorN->setCode($code);
                    $colorN->setTitle($title);

                    $em->persist($colorN);
                    $em->flush();

                    $response = "OK";
                }
            }

            $rep = $em->getRepository('backOfficeBundle:attribute_color');
            $color = $rep->findAll();

            return $this->render('@backOffice/Default/addColor.html.twig', array("colors" => $color, "user" => $session->get("user"), "response" => $response));

        }


    /**
     * @Route("/delete-color/")
     * @Template()
     */
    public function deleteColorAction()
    {
        $this->verifierSession("SUPCL");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $response = "NO";

            $id = $_GET['id'];
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:attribute_color');
            $color = $repository->findOneById($id);
            if ($color) {

                $em->remove($color);
                $em->flush();
                $response = "OK";
            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }

    /**
     * @Route("/newsletters/")
     * @Template()
     */
    public function newsletterAction()
    {
        $this->verifierSession("CONSNew");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }
            $em = $this->getDoctrine()->getManager();
            $rep = $em->getRepository('backOfficeBundle:newsletter');
            $newsletter = $rep->findBy(array(), array("id" => "DESC"));

            return $this->render('@backOffice/Default/newsletter.html.twig', array("newsletter" => $newsletter, "user" => $session->get("user")));


    }

    /**
     * @Route("/list-utilisateurs/")
     * @Template()
     */
    public function listUtilisateurAction(Request $request)
    {
        $this->verifierSession("CONSUS");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $membres = array();
            $em = $this->getDoctrine()->getManager();
            $rep = $em->getRepository('backOfficeBundle:membre');
            $membre = $rep->findBy(array(), array("id" => "DESC"));
            for ($i = 0; $i < count($membre); $i++) {
                $membres[$i]['membre'] = $membre[$i];
                //-------nbr de commande effectuer
                $qb = $em->createQueryBuilder();
                $qb->select('count(commande.idmembre)');
                $qb->where('commande.idmembre = :idmembre AND  commande.validationUser = :validationUser');
                $qb->setParameter('idmembre', $membre[$i]->getId());
                $qb->setParameter('validationUser', 1);
                $qb->from('backOfficeBundle:commande', 'commande');
                $membres[$i]['count'] = $qb->getQuery()->getSingleScalarResult();

            }


            return $this->render('@backOffice/Default/listUtilisateur.html.twig', array("membre" => $membres, "user" => $session->get("user")));


    }

    /**
     * @Route("/delete-utilisateurs/")
     * @Template()
     */
    public function deleteUtilisateurAction(Request $request)
    {
        $this->verifierSession("SUPUS");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }
            $response = "NO";

            $id = $_GET['id'];
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:membre');
            $membre = $repository->findOneById($id);
            if ($membre) {
                $em->remove($membre);
                $em->flush();
                $response = "OK";
            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
    }

    /**
     * @Route("/update-utilisateur/")
     * @Template()
     */
    public function updateUtilisateurAction(Request $request)
    {
        $this->verifierSession("MODUS");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }
            $response = "";
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:membre');
            $user = $repository->findOneById($_GET["id"]);

            if ($request->getMethod() == "POST") {

                $sexe = $request->get("sexe");
                $nom = $request->get("nom");
                $prenom = $request->get("prenom");
                $tel = $request->get("tel");
                $mobile = $request->get("mobile");
                $adresse = $request->get("adresse");
                $email = $request->get("email");
                $pass2 = $request->get("pass2");
                $pass3 = $request->get("pass3");
                if (empty($nom) || empty($prenom) || empty($mobile) || empty($adresse) || empty($email)) {
                    $response = "Un des champs est vide";
                } else {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        $em = $this->getDoctrine()->getManager();
                        $repository = $em->getRepository('backOfficeBundle:membre');
                        $email1 = $repository->findOneByEmail($email);

                        if (!$email1 or ($email1 and $email1->getId() == $_GET["id"])) {

                            $user->setEmail($email);
                            $user->setNom($nom);
                            $user->setPrenom($prenom);
                            $user->setAdresse($adresse);
                            if ($user->getTel() != $tel) {
                                if ((preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}$#', $tel) == true) || empty($tel)) {
                                    $user->setTel($tel);
                                }
                            }

                            if ($user->getMobile() != $mobile) {
                                if (preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}$#', $mobile) == true) {
                                    $user->setMobile($mobile);
                                }
                            }
                            $user->setSexe($sexe);

                            $em->flush();
                            $response = "OK";

                        } else {
                            $response = "Email deja existe";
                        }
                    } else {
                        $response = "Email invalide";
                    }


                    if ($request->get("pass1") != "") {

                        $pass2 = $request->get("pass2");
                        $pass3 = $request->get("pass3");
                        if (strlen($pass2) >= 8 && strlen($pass2) <= 16) {
                            if ($pass2 == $pass3) {
                                $em = $this->getDoctrine()->getManager();
                                $repository = $em->getRepository('backOfficeBundle:membre');
                                $user = $repository->findOneById($user->getId());
                                $user->setPassword(md5($pass2));
                                $em->flush();
                                $response = "OK";
                            } else {
                                $response = "Les deux mot de passe ne sont pas identique";
                            }
                        } else {
                            $response = "Le nouveau mot de passe doit comprendre entre 8 et 16 caractéres";
                        }
                    }
                }
            }

            return $this->render('@backOffice/Default/updateUtilisateur.html.twig', array("response" => $response, "user" => $user));
        }


    /**
     * @Route("/list-adminstrateur/")
     * @Template()
     */
    public function listAdminstrateurAction(Request $request)
    {
        $this->verifierSession("CONSADM");
            $admin = array();
            $em = $this->getDoctrine()->getManager();
            $rep = $em->getRepository('backOfficeBundle:admin');
            $admin = $rep->findBy(array(), array("id" => "DESC"));

            return $this->render('@backOffice/Default/listAdminstrateur.html.twig', array("membre" => $admin));
    }

    /**
     * @Route("/add-adminstrateur/")
     * @Template()
     */
    public function addAdminstrateurAction(Request $request)
    {

        $listeRole = $this->getDoctrine()->getRepository("backOfficeBundle:listRole")->findAll();
        $this->verifierSession("ADDADM");

        $response = "";
        $login = "";
        $email = "";
        $adresse = "";
        $nom = "";
        $prenom = "";

        $password = "";
        $newpassword = "";
        $tel = "";


        if ($request->getMethod() == "POST") {
            $nom = $request->get("nom");
            $prenom = $request->get("prenom");

            $login = $request->get("login");
            $email = $request->get("email");
            $tel = $request->get("tel");
            $adresse = $request->get("adresse");
            $password = $request->get("password");
            $newpassword = $request->get("newpassword");
            if (empty($prenom) || empty($nom) || empty($adresse) || empty($tel) || empty($email) || empty($password) || empty($newpassword)) {
                $response = "Un des champs est vide !";
            } else {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    if (preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}$#', $tel) == true) {
                        if (strlen($password) >= 8 && strlen($password) <= 16) {

                            if ($password == $newpassword) {
                                $em = $this->getDoctrine()->getManager();
                                $repository = $em->getRepository('backOfficeBundle:admin');
                                $mem = $repository->findOneByEmail($email);
                                if ($mem) {
                                    $response = "Utilisateur existant, veuillez changer d'adresse mail";
                                } else {

                                    $admin = new admin();
                                    $admin->setNom($nom);
                                    $admin->setPrenom($prenom);
                                    $admin->setLogin(0);
                                    $admin->setEmail($email);
                                    $admin->setTel($tel);
                                    $admin->setAdresse($adresse);
                                    $admin->setPassword(md5($password));
                                    $admin->setRs(0);
                                    $admin->setRc(0);
                                    $admin->setIdentifiantF(0);
                                    $admin->setPattente(0);
                                    $admin->setCnss(0);
                                    $admin->setIce(0);
                                    $admin->setCapital(0);
                                    $admin->setFax(0);
                                    $admin->setSite(0);
                                    $admin->setUrllogo(0);
                                    $admin->setDernierecnx(new \DateTime());
                                    $admin->setTblFacture(0);
                                    $admin->setColorFacture(0);

                                    $em->persist($admin);
                                    $em->flush();

                                    for ($i=0; $i<count($listeRole); $i++)
                                    {
                                        $validation=0;
                                        if(isset($_POST[$listeRole[$i]->getCode()]))
                                        {
                                            $validation=1;
                                        }
                                        $roles = new roles();
                                        $roles->setRole($validation);
                                        $roles->setIdRole($listeRole[$i]->getId());
                                        $roles->setIdAdmin($admin->getId());
                                        $em->persist($roles);

                                    }

                                    $em->flush();

                                    return $this->redirect('/list-adminstrateur/');
                                }
                            } else {
                                $response = "Les deux mot de passe ne sont pas identique";
                            }
                        } else {
                            $response = "Le mot de passe doit comprendre entre 8 et 16 caractéres";
                        }
                    } else {
                        $response = "Numero de telephone incorrect";
                    }
                } else {
                    $response = "Email incorrect";
                }
            }
        }
        return $this->render('@backOffice/Default/addAdminstrateur.html.twig', array("nom" => $nom, "prenom" => $prenom, "response" => $response, "login" => $login, "email" => $email, "tel" => $tel, "adresse" => $adresse ,"ListRole"=>$listeRole));

    }

    /**
     * @Route("/profil-admin/")
     * @Template()
     */
    public function profilAdminAction(Request $request)
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            $user = "";
            $users = $session->get("user");

            $response = "";
            $login = "";
            $email = "";
            $adresse = "";
            $nom = "";
            $prenom = "";

            $password = "";
            $newpassword = "";
            $tel = "";
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:admin');
            $user = $repository->findOneById($users->getId());

            if ($request->getMethod() == "POST") {
                $nom = $request->get("nom");
                $prenom = $request->get("prenom");

                $login = $request->get("login");
                $email = $request->get("email");
                $tel = $request->get("tel");
                $adresse = $request->get("adresse");
                $password = $request->get("password");
                $newpassword = $request->get("newpassword");
                if (empty($prenom) || empty($nom) || empty($adresse) || empty($tel) || empty($email)) {
                    $response = "Un des champs est vide !";
                } else {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        if (preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}$#', $tel) == true) {


                            if ($password == $newpassword) {

                                if (empty($password) || empty($newpassword)) {

                                    $em = $this->getDoctrine()->getManager();
                                    $repository = $em->getRepository('backOfficeBundle:membre');
                                    $email1 = $repository->findOneByEmail($email);

                                    if (!$email1 or ($email1 and $email1->getId() == $user->getId())) {
                                        $user->setNom($nom);
                                        $user->setPrenom($prenom);
                                        $user->setLogin(0);
                                        $user->setEmail($email);
                                        $user->setTel($tel);
                                        $user->setAdresse($adresse);
                                        //$user->setPassword(md5($password));
                                        $user->setRs(0);
                                        $user->setRc(0);
                                        $user->setIdentifiantF(0);
                                        $user->setPattente(0);
                                        $user->setCnss(0);
                                        $user->setIce(0);
                                        $user->setCapital(0);
                                        $user->setFax(0);
                                        $user->setSite(0);
                                        $user->setUrllogo(0);
                                        $user->setDernierecnx(new \DateTime());
                                        $user->setTblFacture(0);
                                        $user->setColorFacture(0);

                                        $em->persist($user);
                                        $em->flush();
                                    } else {
                                        $response = "Impossible d'utiliser cette adresse mail";
                                    }

                                } else {
                                    $em = $this->getDoctrine()->getManager();
                                    $repository = $em->getRepository('backOfficeBundle:membre');
                                    $email1 = $repository->findOneByEmail($email);
                                    if (!$email1 or ($email1 and $email1->getId() == $user->getId())) {
                                        $user->setNom($nom);
                                        $user->setPrenom($prenom);
                                        $user->setLogin(0);
                                        $user->setEmail($email);
                                        $user->setTel($tel);
                                        $user->setAdresse($adresse);
                                        $user->setPassword(md5($password));
                                        $user->setRs(0);
                                        $user->setRc(0);
                                        $user->setIdentifiantF(0);
                                        $user->setPattente(0);
                                        $user->setCnss(0);
                                        $user->setIce(0);
                                        $user->setCapital(0);
                                        $user->setFax(0);
                                        $user->setSite(0);
                                        $user->setUrllogo(0);
                                        $user->setDernierecnx(new \DateTime());
                                        $user->setTblFacture(0);
                                        $user->setColorFacture(0);

                                        $em->persist($user);
                                        $em->flush();
                                    } else {
                                        $response = "Impossible d'utiliser cette adresse mail";
                                    }

                                }
                            } else {
                                $response = "Les deux mot de passe ne sont pas identique";
                            }

                        } else {
                            $response = "Numero de telephone incorrect";
                        }
                    } else {
                        $response = "Email incorrect";
                    }
                }
            }


            return $this->render('@backOffice/Default/profilAdmin.html.twig', array("user" => $user, "response" => $response));

        }
    }


    /**
     * @Route("/delete-admin/")
     * @Template()
     */
    public function deleteadminAction()
    {
        $this->verifierSession("SUPADM");
            $response = "NO";

            $id = $_GET['id'];
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:admin');
            $color = $repository->findOneById($id);
            if ($color) {

                $em->remove($color);
                $em->flush();
                $response = "OK";
            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }

    /**
     * @Route("/deleteTaille/")
     * @Template()
     */
    public function deleteTailleAction()
    {
        $this->verifierSession("SUPT");
            $response = "NO";

            $id = $_GET['id'];
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Tailles');
            $tailles = $repository->findOneById($id);

            $repository = $em->getRepository('backOfficeBundle:produit_info');
            $produit = $repository->findOneByTitleTaille($tailles->getTitleTAille());
            if ($produit) {
                $response = "!OK";
            } else {
                if ($tailles) {

                    $em->remove($tailles);
                    $em->flush();
                    $response = "OK";
                }
            }

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }

    /**
     * @Route("/addTailles/")
     * @Template()
     */
    public function addTaillesAction(Request $request)
    {
        $this->verifierSession("ADDT");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }
            $em = $this->getDoctrine()->getManager();
            $response = "";
            if ($request->getMethod() == "POST") {
                $title = $request->get("Ttitle");
                if (empty($title)) {
                    $response = "Champ vide !";
                } else {
                    $repository = $em->getRepository('backOfficeBundle:Tailles');
                    $produit = $repository->findOneByTitleTaille($title);
                    if ($produit) {
                        $response = "Taille deja existe !";
                    } else {
                        $tailleN = new Tailles();
                        $tailleN->setTitleTaille($title);

                        $em->persist($tailleN);
                        $em->flush();

                        $response = "OK";
                    }

                }
            }

            $rep = $em->getRepository('backOfficeBundle:Tailles');
            $Tailles = $rep->findAll();

            return $this->render('@backOffice/Default/addTailles.html.twig', array("Tailles" => $Tailles, "user" => $session->get("user"), "response" => $response));


    }

    /**
     * @Route("/addInfoProduit/")
     * @Template()
     */
    public function addInfoProduitAction(Request $request)
    {

        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            $em = $this->getDoctrine()->getManager();
            $response = "";

            $rep = $em->getRepository('backOfficeBundle:Tailles');
            $Tailles = $rep->findAll();

            return $this->render('@backOffice/Default/addInfoProduit.html.twig', array("Tailles" => $Tailles, "user" => $session->get("user"), "response" => $response));
        }
    }






    //---------------------------------addFactureFournisseur--------------------------------------//

    /**
     * @Route("/add-FactureFournisseur-site/")
     * @Template()
     */

    public function addFactureFournisseur(Request $request)
    {
        $this->verifierSession("ADDFF");
        $fournisseur = $this->getDoctrine()->getRepository("backOfficeBundle:fournisseur")->findAll();

        $em = $this->getDoctrine()->getManager();
        $response = "";


        if ($request->getMethod() == 'POST') {
            $date = $request->get('date');
            $total = $request->get('total');
            $description = $request->get('description');
            $fournisseurs = $request->get('four');
            if (empty($date) or empty($total) or empty($description) or empty($fournisseurs) or !isset($_FILES["fichier"])) {
                $response = "Les champs sont vide !";
            } else {
                if (is_numeric($total)) {
                    $maxNum = $em
                        ->createQuery("select max(F.id) from backOfficeBundle:facturefournisseur F")
                        ->getSingleScalarResult();
                    if (!$maxNum) {
                        $maxNum = 0;
                    }
                    $numero = "F" . ($maxNum + 1);
                    $facutrefournisseur = new facturefournisseur();
                    $facutrefournisseur->setDate(new \DateTime($date))
                        ->setTotel($total)
                        ->setNumero($numero)
                        ->setDescription($description)
                        ->setIdFournisseur($fournisseurs);


                    $em->persist($facutrefournisseur);
                    $em->flush();
                    $response = "success";
                    $resp = $this->AddImage($_FILES["fichier"], "piecejoint");
                    if ($resp["response"] == "OK") {
                        $p = new Piecejoint();
                        $p->setUrlfile($resp["response1"])
                            ->setIdFacturefournisseur($facutrefournisseur->getId());
                        $em->persist($p);
                        $em->flush();
                    } else {
                        $response = $resp["response"];
                    }

                    return $this->render('@backOffice/Default/addfacturefournisseur.html.twig', array("response" => $response, "fournisseur" => $fournisseur));
                } else {
                    $response2 = "Le champ doit etre numérique !";
                    return $this->render('@backOffice/Default/addfacturefournisseur.html.twig', array("response2" => $response2, "fournisseur" => $fournisseur));
                }
            }

        }
        return $this->render('@backOffice/Default/addfacturefournisseur.html.twig', array("response" => $response, "fournisseur" => $fournisseur));


    }

    //---------------------------liste des factures des fournisseurs-----------------------------------------------------------//

    /**
     * @Route("/list-FactureFournisseur-site/")
     * @Template()
     */
    public function listeFactureFournisseur()
    {
        $this->verifierSession("CONSFF");
        $facturefournisseur = $this->getDoctrine()->getRepository("backOfficeBundle:facturefournisseur")->findAll();

        $table = array();
        for ($i = 0; $i < count($facturefournisseur); $i++) {
            $table[$i]["facture"] = $facturefournisseur[$i];
            $fournisseur = $this->getDoctrine()->getRepository("backOfficeBundle:fournisseur")->find($facturefournisseur[$i]->getIdfournisseur());

            $table[$i]["fournisseur"] = $fournisseur->getRs();
        }

        return $this->render('@backOffice/Default/listfacturefournisseur.html.twig', array('facutrefournisseurs' => $table));
    }


    //----------------------------updatefacturefournisseur------------------------------------------------------------//

    /**
     * @Route("/update-FactureFournisseur-site/{id}/")
     * @Template()
     */

    public function updatefacturefournisseur($id, Request $request)
    {
        $this->verifierSession("MODFF");
        $facturefournisseur = $this->getDoctrine()->getRepository("backOfficeBundle:facturefournisseur")->find($id);
        $fournisseur = $this->getDoctrine()->getRepository("backOfficeBundle:fournisseur")->findAll();
        $pj = $this->getDoctrine()->getRepository("backOfficeBundle:piecejoint")->findOneBy(array("idFacturefournisseur" => $id));
        $em = $this->getDoctrine()->getManager();
        $response = "";

        if ($request->getMethod() == 'POST') {
            $date = $request->get('date');
            $total = $request->get('total');
            $description = $request->get('description');
            $fourniss = $request->get('four');
            if (empty($date) or empty($total) or empty($description) or !isset($_FILES["fichier"])) {
                $response = "Les champs sont vide !";
            } else {
                if (is_numeric($total)) {
                    $facturefournisseur->setdate(new \DateTime($date))
                        ->setTotel($total)
                        ->setdescription($description)
                        ->setIdFournisseur($fourniss);
                    if (isset($_FILES["fichier"])) {
                        $resp = $this->AddImage($_FILES["fichier"], "piecejoint");
                        if ($resp["response"] == "OK") {
                            if ($pj) {

                                $pj->setUrlfile($resp["response1"]);
                                $em->flush();

                            } else {
                                $p = new piecejoint();
                                $p->setUrlfile($resp["response1"])
                                    ->setIdFacturefournisseur($facturefournisseur->getId());
                                $em->persist($p);
                                $em->flush();
                            }
                        } else {
                            $response = $resp["response"];
                        }


                    }

                    $em->flush();
                    $response = "success";


                    return $this->render('@backOffice/Default/updatefacturefournisseur.html.twig', array("response" => $response, "fctfournisseur" => $facturefournisseur, "pj" => $pj, "fournisseur" => $fournisseur));
                } else {
                    $response2 = "Le champ doit etre numérique !";
                    return $this->render('@backOffice/Default/updatefacturefournisseur.html.twig', array("response2" => $response2, "fctfournisseur" => $facturefournisseur, "pj" => $pj, "fournisseur" => $fournisseur));
                }
                return $this->render('@backOffice/Default/listfacturefournisseur.html.twig', array("response" => $response, "fctfournisseur" => $facturefournisseur, "pj" => $pj, "fournisseur" => $fournisseur));
            }
        }

        return $this->render('@backOffice/Default/updatefacturefournisseur.html.twig', array("fctfournisseur" => $facturefournisseur, "pj" => $pj, "response" => $response, "fournisseur" => $fournisseur));
    }

    //---------------------------------Delete factureFournisseur-----------------------------------------------//


    /**
     * @Route("/delete-FactureFournisseur-site/{id}/")
     * @Template()
     */
    public function deletefacturefournisseur(Request $request, $id)
    {
        $this->verifierSession("SUPFF");
        $session = new Session();

            $facturefournisseur = $this->getDoctrine()->getRepository("backOfficeBundle:facturefournisseur")->find($id);
            $pj = $this->getDoctrine()->getRepository("backOfficeBundle:piecejoint")->findOneBy(array("idFacturefournisseur" => $id));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pj);
            $entityManager->remove($facturefournisseur);
            $entityManager->flush();
            $response = "OK";
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));


    }



//---------------------------------add Depence-----------------------------------------------------//

    /**
     * @Route("/add-charge-site/")
     * @Template()
     */
    public function adddepence(Request $request)
    {
        $this->verifierSession("ADDCH");
        $date = $request->get('date');
        $total = $request->get('total');
        $description = $request->get('description');


        $em = $this->getDoctrine()->getManager();
        $response = "";

        if ($request->getMethod() == 'POST') {
            if (empty($date) or empty($total) or empty($description)) {
                $response = "Les champs sont vide !";
            } else {
                if (is_numeric($total)) {
                    $maxNum = $em
                        ->createQuery("select max(d.id) from backOfficeBundle:depence d")
                        ->getSingleScalarResult();
                    if (!$maxNum) {
                        $maxNum = 0;
                    }
                    $numero = "D" . ($maxNum + 1);
                    $depence = new depence();
                    $depence->setdate(new \DateTime($date))
                        ->settotal($total)
                        ->setNumero($numero)
                        ->setdescription($description);


                    $em->persist($depence);
                    $em->flush();
                    $response = "success";
                } else {
                    $response2 = "Le champ doit etre numérique !";
                    return $this->render('@backOffice/Default/addCharge.html.twig', array("response2" => $response2));
                }
                return $this->render('@backOffice/Default/addCharge.html.twig', array("response" => $response));
            }
        }
        return $this->render('@backOffice/Default/addCharge.html.twig', array("response" => $response));
    }


    //---------------------------------list Depence-----------------------------------------------------//

    /**
     * @Route("/list-charge-site/")
     * @Template()
     */
    public function listedepence()
    {
        $this->verifierSession("CONSCH");
        $depence = $this->getDoctrine()->getRepository("backOfficeBundle:depence")->findAll();
        return $this->render('@backOffice/Default/listdepence.html.twig', array('depence' => $depence));
    }


    //---------------------------------update Charge-----------------------------------------------------//

    /**
     * @Route("/update-charge-site/{id}/")
     * @Template()
     */
    public function updatedepence($id, Request $request)
    {
        $this->verifierSession("MODCH");


        $depence = $this->getDoctrine()->getRepository("backOfficeBundle:depence")->find($id);
        $em = $this->getDoctrine()->getManager();


        if ($request->getMethod() == 'POST') {
            $date = $request->get('date');
            $total = $request->get('total');
            $description = $request->get('description');
            if (empty($date) or empty($total) or empty($description)) {
                $response = "Les champs sont vide !";
            } else {
                if (is_numeric($total)) {
                    $depence->setdate(new \DateTime($date))
                        ->settotal($total)
                        ->setdescription($description);
                    $em->flush();
                    $response = "success";

                    return $this->render('@backOffice/Default/updatedepence.html.twig', array("response" => $response, "depence" => $depence));
                } else {
                    $response2 = "Le champ doit etre numérique !";
                    return $this->render('@backOffice/Default/updatedepence.html.twig', array("response2" => $response2, "depence" => $depence));
                }
            }
            return $this->render('@backOffice/Default/updatedepence.html.twig', array("response" => $response, "depence" => $depence));

        }
        return $this->render('@backOffice/Default/updatedepence.html.twig', array('depence' => $depence));

    }


    //---------------------------------------------------delete depence-----------------------------//

    /**
     * @Route("/delete-depence-site/{id}/")
     * @Template()
     */
    public function deletedepnce(Request $request, $id)
    {
           $this->verifierSession("SUPCH");
            $depence = $this->getDoctrine()->getRepository("backOfficeBundle:depence")->find($id);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($depence);
            $entityManager->flush();
            $response = "OK";
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));


    }

    //----------------------------------------add fournisseur--------------------------------------//

    /**
     * @Route("/add-fournisseur-site/")
     * @Template()
     */
    public function addfournisseur(Request $request)
    {
        $this->verifierSession("ADDFR");

        $rs = $request->get('rs');
        $Responsable = $request->get('responsable');
        $Email = $request->get('email');
        $adress = $request->get('adresse');
        $tele = $request->get('tele');
        $fax = $request->get('fax');

        $em = $this->getDoctrine()->getManager();
        $response = "";

        if ($request->getMethod() == 'POST') {
            if (empty($rs) or empty($Email) or empty($adress) or empty($tele) or empty($fax) or empty($Responsable)) {
                $response = "Les champs sont vide !";
            } else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $response = "Format de email non valider!!";
            } else {
                if (is_numeric($tele) && (is_numeric($fax))) {
                    $fournisseur = new fournisseur();
                    $fournisseur->setRs($rs)
                        ->setResponsable($Responsable)
                        ->setEmail($Email)
                        ->setadresse($adress)
                        ->settele($tele)
                        ->setfax($fax);


                    $em->persist($fournisseur);
                    $em->flush();
                    $response = "success";
                    return $this->render('@backOffice/Default/addfournisseur.html.twig', array("response" => $response));
                } else {
                    $response2 = "Le champ doit etre numérique !";
                    return $this->render('@backOffice/Default/addfournisseur.html.twig', array("response2" => $response2));
                }
                return $this->render('@backOffice/Default/addfournisseur.html.twig', array("response1" => $response));
            }
            return $this->render('@backOffice/Default/addfournisseur.html.twig', array("response2" => $response));

        }
        return $this->render('@backOffice/Default/addfournisseur.html.twig', array("response" => $response));
    }

//--------------------------------liste des fournisseur---------------------------------------------------------------//

    /**
     * @Route("/list-fournisseur-site/")
     * @Template()
     */
    public function listefournisseur()
    {
        $this->verifierSession("CONSFR");
        $fournisseur = $this->getDoctrine()->getRepository("backOfficeBundle:fournisseur")->findAll();
        return $this->render('@backOffice/Default/listfournisseur.html.twig', array('fournisseur' => $fournisseur));
    }

    //-----------------------------------update Fournisseur-------------------------------------//


    /**
     * @Route("/update-fournisseur-site/{id}/")
     * @Template()
     */
    public function updatefournisseur($id, Request $request)
    {
        $this->verifierSession("MODFR");
        $fournisseur = $this->getDoctrine()->getRepository("backOfficeBundle:fournisseur")->find($id);
        $em = $this->getDoctrine()->getManager();


        if ($request->getMethod() == 'POST') {
            $rs = $request->get('rs');
            $Responsable = $request->get('responsable');
            $Email = $request->get('email');
            $adress = $request->get('adresse');
            $tele = $request->get('tele');
            $fax = $request->get('fax');
            if (empty($rs) or empty($Email) or empty($adress) or empty($tele) or empty($fax) or empty($Responsable)) {
                $response = "Les champs sont vide !";
            } else {
                if (is_numeric($tele) && is_numeric($fax)) {
                    $fournisseur->setRs($rs)
                        ->setResponsable($Responsable)
                        ->setEmail($Email)
                        ->setadresse($adress)
                        ->settele($tele)
                        ->setfax($fax);
                    $em->flush();
                    $response = "success";

                    return $this->render('@backOffice/Default/updateFournisseur.html.twig', array("response" => $response, "fournisseur" => $fournisseur));
                } else {
                    $response2 = "Le champ doit etre numérique !";
                    return $this->render('@backOffice/Default/updateFournisseur.html.twig', array("response2" => $response2, "fournisseur" => $fournisseur));
                }

            }
            return $this->render('@backOffice/Default/updateFournisseur.html.twig', array("response" => $response, "fournisseur" => $fournisseur));

        }
        return $this->render('@backOffice/Default/updateFournisseur.html.twig', array('fournisseur' => $fournisseur));

    }



    //-------------------------delete fournisseur----------------------------------//


    /**
     * @Route("/delete-fournisseur-site/{id}/")
     * @Template()
     */

    public function deletefournisseur(Request $request, $id)
    {
        $this->verifierSession("SUPFR");

            $fournisseur = $this->getDoctrine()->getRepository("backOfficeBundle:fournisseur")->find($id);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fournisseur);
            $entityManager->flush();
            $response = "OK";
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));


    }


    //-------------------------------------add client--------------------------//

    /**
     * @Route("/add-client/")
     * @Template()
     */
    public function addClient(Request $request)
    {

        $this->verifierSession("ADDC");
        $em = $this->getDoctrine()->getManager();
        $response = "";

        if ($request->getMethod() == 'POST') {
            $rs = $request->get('rs');
            $Responsable = $request->get('responsable');
            $Email = $request->get('email');
            $adress = $request->get('adresse');
            $tele = $request->get('tele');
            $fax = $request->get('fax');
            $activite = $request->get('activite');

            if (empty($rs) or empty($Email) or empty($adress) or empty($tele) or empty($fax) or empty($Responsable) or empty($activite)) {
                $response = "Les champs sont vide !";
            } else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $response = "Format de email non valider!!";
            } else {
                if (is_numeric($tele) && (is_numeric($fax))) {
                    $client = new client();
                    $client->setRs($rs)
                        ->setCreatedAt(new \DateTime())
                        ->setResponsable($Responsable)
                        ->setEmail($Email)
                        ->setadresse($adress)
                        ->setTel($tele)
                        ->setfax($fax)
                        ->setActivit($activite);


                    $em->persist($client);
                    $em->flush();
                    $response = "success";
                    return $this->render('@backOffice/Default/addClient.html.twig', array("response" => $response));
                } else {
                    $response2 = "Le champ doit etre numérique !";
                    return $this->render('@backOffice/Default/addClient.html.twig', array("response2" => $response2));
                }
                return $this->render('@backOffice/Default/addClient.html.twig', array("response1" => $response));
            }
            return $this->render('@backOffice/Default/addClient.html.twig', array("response2" => $response));

        }
        return $this->render('@backOffice/Default/addClient.html.twig', array("response" => $response));
    }


    //----------------------Liste des clients-----------------------//

    /**
     * @Route("/list-client-site/")
     * @Template()
     */
    public function listeclient()
    {
        $this->verifierSession("CONSC");
        $client = $this->getDoctrine()->getRepository("backOfficeBundle:client")->findAll();
        return $this->render('@backOffice/Default/listClient.html.twig', array('client' => $client));

    }


    //---------------------updateClient-----------------------------------//

    /**
     * @Route("/update-client-site/{id}/")
     * @Template()
     */
    public function updateclient($id, Request $request)
    {
        $this->verifierSession("MODC");
        $client = $this->getDoctrine()->getRepository("backOfficeBundle:client")->find($id);
        $em = $this->getDoctrine()->getManager();


        if ($request->getMethod() == 'POST') {
            $rs = $request->get('rs');
            $Responsable = $request->get('responsable');
            $Email = $request->get('email');
            $adress = $request->get('adresse');
            $tele = $request->get('tele');
            $fax = $request->get('fax');
            $activite = $request->get('activite');
            if (empty($rs) or empty($Email) or empty($adress) or empty($tele) or empty($fax) or empty($Responsable)) {
                $response = "Les champs sont vide !";
            } else {
                if (is_numeric($tele) && is_numeric($fax)) {
                    $client->setRs($rs)
                        ->setResponsable($Responsable)
                        ->setEmail($Email)
                        ->setadresse($adress)
                        ->settel($tele)
                        ->setfax($fax)
                        ->setActivit($activite);

                    $em->flush();
                    $response = "success";

                    return $this->render('@backOffice/Default/updateClient.html.twig', array("response" => $response, "client" => $client));
                } else {
                    $response2 = "Le champ doit etre numérique !";
                    return $this->render('@backOffice/Default/updateClient.html.twig', array("response2" => $response2, "client" => $client));
                }

            }
            return $this->render('@backOffice/Default/updateClient.html.twig', array("response" => $response, "client" => $client));

        }
        return $this->render('@backOffice/Default/updateClient.html.twig', array("client" => $client));

    }

    //--------------------------DeleteClient-------------------------------//


    /**
     * @Route("/delete-client-site/{id}/")
     * @Template()
     */

    public function deleteclient(Request $request, $id)
    {
        $this->verifierSession("SUPC");


            $client = $this->getDoctrine()->getRepository("backOfficeBundle:client")->find($id);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($client);
            $entityManager->flush();
            $response = "OK";
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }


    //---------------------------Liste des produits matiere premier----------------------//

    /**
     * @Route("/list-ProduitMP-site/")
     * @Template()
     */
    public function listeProduitMP()
    {
        $this->verifierSession("CONSPMP");
        $ProduitMP = $this->getDoctrine()->getRepository("backOfficeBundle:Produitpremier")->findAll();

        $table = array();
        for ($i = 0; $i < count($ProduitMP); $i++) {
            $table[$i]["produitmp"] = $ProduitMP[$i];
            $categorie = $this->getDoctrine()->getRepository("backOfficeBundle:categorie")->find($ProduitMP[$i]->getIdCategorie());
            $table[$i]["categorie"] = $categorie->getNom();

        }


        return $this->render('@backOffice/Default/listProduitMatierPremier.html.twig', array("produitpm" => $table));
    }

    //------------------------------Add Produit de matier Premier---------------------------//

    /**
     * @Route("/add-ProduitMP-site/")
     * @Template()
     */
    public function addProduitMP(Request $request)
    {

        $this->verifierSession("ADDPMP");
        $Categorie = $this->getDoctrine()->getRepository("backOfficeBundle:categorie")->findAll();
        $em = $this->getDoctrine()->getManager();
        $response = "";

        if ($request->getMethod() == 'POST') {
            $titre = $request->get('titre');
            $PrixHt = $request->get('ht');
            $Prixttc = $request->get('ttc');
            $Prixtva = $request->get('tva');
            $Qnt = $request->get('qnt');
            $description = $request->get('description');
            $categories = $request->get('four');

            if (empty($titre) or empty($PrixHt) or empty($Prixttc) or empty($Prixtva) or empty($Qnt) or empty($description) or empty($categories)) {
                $response = "Les champs sont vide !";
            } else {
                if (is_numeric($PrixHt) && is_numeric($Prixttc) && is_numeric($Prixtva) && is_numeric($Qnt)) {

                    $maxNum = $em
                        ->createQuery("select max(p.id) from backOfficeBundle:Produitpremier p")
                        ->getSingleScalarResult();
                    if (!$maxNum) {
                        $maxNum = 0;
                    }
                    $Reference = "#PMP" . ($maxNum + 1);
                    $produitpremier = new Produitpremier();
                    $produitpremier->setTitre($titre)
                        ->setDateAjout(new \DateTime())
                        ->setReference($Reference)
                        ->setPrixHt($PrixHt)
                        ->setPrixTtc($Prixttc)
                        ->setTVA($Prixtva)
                        ->setQuantiter($Qnt)
                        ->setDescription($description)
                        ->setIdCategorie($categories);

                    if (isset($_FILES["fichier"])) {
                        $file = $_FILES["fichier"];
                        $resp = $this->AddImage($file, "piecejoint");
                        if ($resp["response"] == "OK") {
                            $produitpremier->setUrlfile($resp["response1"]);
                        } else {
                            $response = $resp["response"];
                        }
                    }

                    $em->persist($produitpremier);
                    $em->flush();
                    $response = "success";
                    return $this->render('@backOffice/Default/addProduitMatierPremier.html.twig', array("response" => $response, "Categorie" => $Categorie));
                } else {
                    $response2 = "Les champs doit etre numérique !";
                    return $this->render('@backOffice/Default/addProduitMatierPremier.html.twig', array("response2" => $response2, "Categorie" => $Categorie));
                }
            }
        }
        return $this->render('@backOffice/Default/addProduitMatierPremier.html.twig', array("response" => $response, "Categorie" => $Categorie));

    }



    //----------------delete un produit de matier premier-------------------//


    /**
     * @Route("/delete-ProduitPMP-site/{id}/")
     * @Template()
     */

    public function deleteProduitPMP(Request $request, $id)
    {
        $this->verifierSession("SUPPMP");

            $ProduitPMP = $this->getDoctrine()->getRepository("backOfficeBundle:Produitpremier")->find($id);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ProduitPMP);
            $entityManager->flush();
            $response = "OK";
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
    }



    //------------update produit de matier premier-----------------------//


    /**
     * @Route("/update-ProduitMP-site/{id}/")
     * @Template()
     */
    public function updateProduitMP(Request $request, $id)
    {
        $this->verifierSession("MODPMP");

        $ProduitPM = $this->getDoctrine()->getRepository("backOfficeBundle:Produitpremier")->find($id);
        $categorie = $this->getDoctrine()->getRepository("backOfficeBundle:categorie")->findAll();
        $em = $this->getDoctrine()->getManager();
        $response = "";

        if ($request->getMethod() == 'POST') {
            $titre = $request->get('titre');
            $PrixHt = $request->get('ht');
            $Prixttc = $request->get('ttc');
            $Prixtva = $request->get('tva');
            $Qnt = $request->get('qnt');
            $description = $request->get('description');
            $categories = $request->get('four');

            if (empty($titre) or empty($PrixHt) or empty($Prixttc) or empty($Prixtva) or empty($Qnt) or empty($description) or empty($categories)) {
                $response = "Les champs sont vide !";
            } else {

                if (is_numeric($PrixHt) && is_numeric($Prixttc) && is_numeric($Prixtva) && is_numeric($Qnt)) {
                    $ProduitPM->setTitre($titre)
                        ->setDateAjout(new \DateTime())
                        ->setPrixHt($PrixHt)
                        ->setPrixTtc($Prixttc)
                        ->setTVA($Prixtva)
                        ->setQuantiter($Qnt)
                        ->setDescription($description)
                        ->setIdCategorie($categories);

                    if (isset($_FILES["fichier"])) {
                        $resp = $this->AddImage($_FILES["fichier"], "piecejoint");
                        if ($resp["response"] == "OK") {
                            $ProduitPM->setUrlfile($resp["response1"]);
                            $em->persist($ProduitPM);
                            $em->flush();

                        } else {
                            $response = $resp["response"];
                        }

                        $em->flush();
                        $response = "success";





                        return $this->render('@backOffice/Default/updateProduitMatierPremier.html.twig', array("response" => $response, "categorie" => $categorie, "produitpm" => $ProduitPM));

                    } else {
                        $response2 = "Les champs doit etre numérique !";
                        return $this->render('@backOffice/Default/updateProduitMatierPremier.html.twig', array("response2" => $response2, "categorie" => $categorie, "produitpm" => $ProduitPM));
                    }
                }
            }


        }
        return $this->render('@backOffice/Default/updateProduitMatierPremier.html.twig', array("response" => $response, "categorie" => $categorie, "produitpm" => $ProduitPM));
    }

    //--------------------List Produit de stock-----------------//


    /**
     * @Route("/list-ProduitStock-site/")
     * @Template()
     */
    public function listeProduitStock()
    {
        $this->verifierSession("CONSPS");
        $ProduitStock = $this->getDoctrine()->getRepository("backOfficeBundle:Produit_Stock")->findAll();

        $table = array();
        for ($i = 0; $i < count($ProduitStock); $i++) {
            $table[$i]["produitstock"] = $ProduitStock[$i];
            $categorie = $this->getDoctrine()->getRepository("backOfficeBundle:souscategorie")->find($ProduitStock[$i]->getIdcategorie());
            $table[$i]["categorie"] = $categorie->getNom();

        }

        return $this->render('@backOffice/Default/listProduitStock.html.twig', array("produitstock" => $table));
    }


    //----------------------------add Facture--------------------------------------//

    /**
     * @Route("/add-Facture-site/")
     * @Template()
     */
    public function addFacture(Request $request)
    {
        $this->verifierSession("ADDF");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $response = "";
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository("backOfficeBundle:client");
            $client = $repository->findAll();

            //---------------//

            $repository = $em->getRepository("backOfficeBundle:Produit_Stock");
            $prod = $repository->findAll();

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new
            JsonEncoder()));
            $json = $serializer->serialize($prod, 'json');

        return $this->render('@backOffice/Default/addFacture.html.twig', array("response" => $response, "clients" => $client, "produits" => $json, "user" => $session->get("user")));

    }

//----------------------------------validation facture------------------------------------------------------------------//

    /**
     * @Route("/validation-facture/")
     * @Template()
     */
    public function validationfactureAction(Request $request)
    {
            $this->verifierSession("ADDF");
            $response = "OK";

            //------------Validation client-----------------//
            if (empty($_POST["rs"])) {
                $response = "Veuillez choisir un client ! ";
            } else {
                $em = $this->getDoctrine()->getManager();

                if ($request->get("actionClient") == "new") {
                    // create new client
                    $client = new client();
                    $client->setCreatedAt(new \DateTime());
                    $client->setActivit("");
                    $client->setAdresse($request->get("adresse"));
                    $client->setEmail($request->get("email"));
                    $client->setFax($request->get("fax"));
                    $client->setResponsable("");
                    $client->setRs($request->get("rs"));
                    $client->setTel($request->get("tel"));

                    $em->persist($client);
                    $em->flush();


                    $id = $client->getId(); var_dump($id);
                } else {
                    $id = $request->get("actionClient");
                }

                //------------Validation facture ---------------//

                if (empty($_POST["totalTTC"])) {
                    $response = "Verifiez votre facture, Quelque chose d'anormal semble exister !";
                } else {

                    //--------------Validation detail-------------//
                    if (!isset($_POST['desc'])) {
                        $response = "La facture ne contient aucun produit !";
                    } else {

                        $rep = $em->getRepository("backOfficeBundle:Facture");
                        $fac = $rep->findby(array(), array("date" => "DESC"), 1);

                        $numero = "1/" . date_format(new \DateTime(), "y");
                        if ($fac) {
                            $numeroF = explode("/", $fac[0]->getNumero());
                            if ($numeroF[1] == date_format(new \DateTime(), "y")) {
                                $n = $numeroF[0] + 1;
                                $numero = $n . "/" . $numeroF[1];
                            }
                        }


                        //----Create facture

                        $facture = new Facture();
                        $facture->setDate(new \DateTime());
                        $facture->setEchance(new \DateTime($request->get("echeance")));
                        $facture->setEtat("Crée");
                        $facture->setMonnaie("DH");
                        $facture->setTotal($request->get("totalTTC"));
                        $facture->setIdclient($id);
                        $facture->setModePaiement($request->get("paiement"));
                        $facture->setTerms($request->get("terms"));
                        //$num = "FA" . date("Yms") . "C" . $id;
                        $facture->setNumero($numero);
                        $facture->setToken("");

                        $em->persist($facture);
                        $em->flush();

                        $idF = $facture->getId();

                        $token = md5("DE" . $idF . "-" . date("Yms") . "C" . $id);
                        $facture->setToken($token);

                        $em->flush();

                        //------ Create detail
                        $desc = $_POST['desc'];
                        $puht = $_POST['puht'];
                        $qte = $_POST['qte'];
                        $ptht = $_POST['ptht'];
                        $tva = $_POST['tva'];
                        $idProd = $_POST['idProd'];
                        for ($i = 0; $i < sizeof($desc); $i++) {
                            if (!empty($desc[$i])) {

                                $produitstock = $this->getDoctrine()->getRepository("backOfficeBundle:Produit_Stock")->find($idProd[$i]);
                                $detail = new detail_facture();
                                $detail->setIdProduitStock($idProd[$i]);
                                $detail->setIdFacture($idF);
                                $detail->setDescription($desc[$i]);
                                $detail->setPrixU($puht[$i]);
                                $detail->setQte($qte[$i]);
                                $detail->setTotalHT($ptht[$i]);
                                $detail->setTva($tva[$i]);
                                $detail->setRef($produitstock->getReference());
                                $em->persist($detail);
                                $em->flush();

                                if ($idProd[$i] != 0) {

                                    $repository = $em->getRepository("backOfficeBundle:Produit_Stock");
                                    $prod = $repository->findOneById($idProd[$i]);

                                    $prod->setQte($prod->getQte() - $qte[$i]);
                                    $em->flush();

                                }
                            }
                        }

                        $response = $idF;
                    }

                }
            }

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

        }


//--------------------------------Show-Facture--------------------------------------------//

    /**
     * @Route("/show-facture/")
     * @Template()
     */
    public function showFactureAction(Request $request)
    {
            $this->verifierSession("ADDF");

            $id = $request->get("id");
            if ($id == "") {
                return $this->Redirect('/list-facture/');
            }
            ini_set('memory_limit', '256M');

            //--------------- GET Facture -------------- //

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository("backOfficeBundle:Facture");
            $facture = $repository->findOneById($id);

            if (!$facture) {
                return $this->Redirect('/list-facture/');
            }

            //---------------- GET DETAIL ----------------//

            $repository = $em->getRepository("backOfficeBundle:detail_Facture");
            $detail = $repository->findByIdFacture($facture->getId());

            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository("backOfficeBundle:detail_Facture");

            $qb = $repo->createQueryBuilder('a');
            $qb->select('a.tva');
            $qb->where('a.idFacture = :idFacture');
            $qb->setParameter('idFacture', $facture->getId());

            $tv = $qb->getQuery()->getResult();
            $tva = array_map('current', $tv);

            $resultTva = array_unique($tva);

            $responseTva = array();
            $someHT = 0;
            for ($i = 0; $i < count($resultTva); $i++) {
                $some = 0;
                for ($j = 0; $j < count($detail); $j++) {
                    if (floatval($resultTva[$i]) == floatval($detail[$j]->getTva())) {
                        $some = $some + $detail[$j]->getTotalHT();
                    }
                }
                $responseTva[$i]['tva'] = $resultTva[$i];
                $responseTva[$i]['total'] = ($some * floatval($resultTva[$i])) / 100;
                $someHT = $someHT + $some;
            }


            //-----------------GET CLIENT ---------------//

            $repository = $em->getRepository("backOfficeBundle:client");
            $client = $repository->findOneById($facture->getIdClient());
            $repository = $em->getRepository('backOfficeBundle:entreprise');
            $entreprise = $repository->find(1);

            //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
            $html = $this->renderView('@backOffice/templates/model2.html.twig', array("entreprise" => $entreprise, "facture" => $facture, "detail" => $detail, "client" => $client, "tva" => $responseTva, "totalHT" => $someHT, "type" => "facture"));

            //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
            //le sens de la page "portrait" => p ou "paysage" => l
            //le format A4,A5...
            //la langue du document fr,en,it...
            $html2pdf = new Html2Pdf();

            //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
            //fullpage : affiche la page entière sur l'écran
            //fullwidth : utilise la largeur maximum de la fenêtre
            //real : utilise la taille réelle
            $html2pdf->pdf->SetDisplayMode('real');

            //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
            $html2pdf->writeHTML($html);

            //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
            $html2pdf->Output('Facture-n-' . $facture->getNumero() . '.pdf');


            return new Response();
    }

//------------------------------updateFacture----------------------------------------//

    /**
     * @Route("/update-facture/")
     * @Template()
     */
    public function updateFactureAction(Request $request)
    {

            $this->verifierSession("MODF");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }
            $id = $request->get("id");
            if ($id == "") {
                return $this->Redirect('/list-facture/');
            }
            $response = "";
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Facture');
            $facture = $repository->findOneById($id);

            if (!$facture) {
                return $this->Redirect('/list-facture/');
            }

            if ($facture->getEtat() != "Crée") {
                return $this->Redirect('/view-facture/?id=' . $id);
            }
            $repository = $em->getRepository('backOfficeBundle:detail_facture');
            $d = $repository->findByIdFacture($facture->getId());

            $repository = $em->getRepository('backOfficeBundle:client');
            $client = $repository->findAll();

            $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
            $prod = $repository->findAll();


            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new
            JsonEncoder()));
            $json = $serializer->serialize($prod, 'json');

            return $this->render('@backOffice/Default/updateFacture.html.twig', array("user" => $session->get("user"), "facture" => $facture, "detail" => $d, "clients" => $client, "produits" => $json, "response" => "", "service" => $prod));


    }


    //----------------validateupdateFacture-----------------------------------//

    /**
     * @Route("/validation-update-facture/")
     * @Template()
     */
    public function validationupdatefactureAction(Request $request)
    {

        $this->verifierSession("MODF");
            $response = "OK";

            //------------Validation infos------------------//

            if ($request->get("monnaie") == "--") {
                $response = "Veuillez choisir la monnaie ! ";
            } else {

                //------------Validation client-----------------//
                if (empty($_POST["rs"])) {
                    $response = "Veuillez choisir un client ! ";
                } else {
                    $em = $this->getDoctrine()->getManager();
                    $id = 0;
                    if ($request->get("actionClient") == "new") {
                        // create new client
                        $client = new client();
                        $client->setDateAjout(new \DateTime());
                        $client->setActivite("");
                        $client->setAdresse($request->get("adresse"));
                        $client->setEmail($request->get("email"));
                        $client->setFax($request->get("fax"));
                        $client->setResponsable("");
                        $client->setRs($request->get("rs"));
                        $client->setSite("");
                        $client->setTel($request->get("tel"));

                        $em->persist($client);
                        $em->flush();

                        $id = $client->getId();
                    } else {
                        $id = $request->get("actionClient");
                    }

                    //------------Validation facture ---------------//

                    if (empty($_POST["totalTTC"])) {
                        $response = "Verifiez votre facture, Quelque chose d'anormal semble exister !";
                    } else {

                        //--------------Validation detail-------------//
                        if (!isset($_POST['desc'])) {
                            $response = "La facture ne contient aucun produit !";
                        } else {
                            //----Create facture
                            $idFacture = $request->get("idFacture");
                            if ($idFacture == "") {
                                return $this->Redirect('/list-facture/');
                            }
                            $em = $this->getDoctrine()->getManager();
                            $repository = $em->getRepository('backOfficeBundle:Facture');
                            $facture = $repository->findOneById($idFacture);

                            if (!$facture) {
                                return $this->Redirect('/list-facture/');
                            }

                            $facture->setEchance(new \DateTime($request->get("echeance")));
                            $facture->setTotal($request->get("totalTTC"));
                            $facture->setIdClient($id);
                            $facture->setModePaiement($request->get("paiement"));
                            $facture->setTerms($request->get("terms"));

                            /*$em->persist($facture);*/
                            $em->flush();

                            $idF = $idFacture;

                            //------ Create detail
                            $desc = $_POST['desc'];
                            $puht = $_POST['puht'];
                            $qte = $_POST['qte'];
                            $ptht = $_POST['ptht'];
                            $tva = $_POST['tva'];
                            $ref = $_POST['refProd'];
                            $idProd = $_POST['idProd'];
                            $idDet = $_POST['idDet'];
                            for ($i = 0; $i < sizeof($desc); $i++) {
                                if (!empty($desc[$i])) {
                                    if ($idDet[$i] == 0) {
                                        $detail = new detail_Facture();
                                        $detail->setIdProduitStock($idProd[$i]);
                                        $detail->setIdFacture($idF);
                                        $detail->setDescription($desc[$i]);
                                        $detail->setPrixU($puht[$i]);
                                        $detail->setQte($qte[$i]);
                                        $detail->setTotalHT($ptht[$i]);
                                        $detail->setTva($tva[$i]);
                                        $detail->setRef($ref[$i]);
                                        $em->persist($detail);
                                        $em->flush();

                                        if ($idProd[$i] != 0) {

                                            $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
                                            $prod = $repository->findOneById($idProd[$i]);

                                            $prod->setQte($prod->getQte() - $qte[$i]);
                                            $em->flush();

                                        }
                                    } else {
                                        $em = $this->getDoctrine()->getManager();
                                        $repository = $em->getRepository('backOfficeBundle:detail_facture');
                                        $detail = $repository->findOneById($idDet[$i]);

                                        $q = $detail->getQte();

                                        $detail->setIdProduitStock($idProd[$i]);
                                        $detail->setIdFacture($idF);
                                        $detail->setDescription($desc[$i]);
                                        $detail->setPrixU($puht[$i]);
                                        $detail->setQte($qte[$i]);
                                        $detail->setTotalHT($ptht[$i]);
                                        $detail->setTVA($tva[$i]);
                                        $detail->setRef($ref[$i]);
                                        $em->persist($detail);
                                        $em->flush();

                                        if ($idProd[$i] != 0) {

                                            $newQte = 0;
                                            if ($qte[$i] > $q) {

                                                $newQte = $qte[$i] - $q;
                                                $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
                                                $prod = $repository->findOneById($idProd[$i]);

                                                $prod->setQte($prod->getQte() - $newQte);
                                                $em->flush();
                                            } elseif ($qte[$i] < $q) {
                                                $newQte = $q - $qte[$i];

                                                $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
                                                $prod = $repository->findOneById($idProd[$i]);

                                                $prod->setQte($prod->getQte() + $newQte);
                                                $em->flush();
                                            }


                                        }
                                    }
                                }
                            }

                            $response = "OK";

                        }

                    }
                }

            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
    }


    //-------------------------------------DeleteFacture-------------------------------//

    /**
     * @Route("/delete-facture/")
     * @Template()
     */
    public function deleteFactureAction(Request $request)
    {
            $this->verifierSession("SUPF");
            //----------- compte pour la gestion des produits du site ----------------//

            $id = $request->get("id");
            $response = "";
            if ($id == "") {
                return $this->Redirect('/list-facture/');
            }

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Facture');
            $facture = $repository->findOneById($id);


            // delete paiement

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Paiement');
            $paiement = $repository->findByIdFacture($id);
            for ($i = 0; $i < count($paiement); $i++) {
                $em->remove($paiement[$i]);
                $em->flush();
            }


            // delete detail

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:detail_Facture');
            $detail = $repository->findByIdFacture($id);
            for ($i = 0; $i < count($detail); $i++) {
                if ($facture->getEtat() == "Crée") {
                    $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
                    $produit = $repository->findOneById($detail[$i]->getIdProduitStock());

                    if ($produit) {
                        $produit->setQte($produit->getQte() + $detail[$i]->getQte());
                        if ($produit->getQte() > $produit->getQte()) {
                            $produit->setQteDep($produit->getQteDep() + $detail[$i]->getQte());
                        }
                    }
                }
                $em->remove($detail[$i]);
                $em->flush();
            }

            // delete facture


            $em->remove($facture);
            $em->flush();

            $response = "OK";

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }

    //---------------------------remove detail----------------------------//
    /**
     * @Route("/remove-detail/")
     * @Template()
     */
    public function removedetailAction()
    {
        $session = new Session();
        if ($session->get("connect") && $session->get("connect") == "OK") {
            $request = $this->get("request");
            $id = $request->get("id");
            if ($id == "") {
                $response = "NO";
            }
            else{


                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:detail_facture');
                $detail = $repository->findOneById($id);

                $repository = $em->getRepository('backOfficeBundle:Facture');
                $facture = $repository->findOneById($detail->getIdFacture());

                $montant = $detail->getTotalHT() + ($detail->getTotalHT()*($detail->getTva()/100));
                $facture->setTotal($facture->getTotal() - $montant);

                if($facture->getEtat() == "Crée"){
                    $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
                    $produit = $repository->findOneById($detail->getIdProduit());

                    if($produit){
                        $produit->setQte($produit->getQte()+$detail->getQte());
                        if($produit->getQte() > $produit->getQteDep()){
                            $produit->setQteDep($produit->getQteDep()+$detail->getQte());
                        }
                    }
                }

                $em->remove($detail);
                $em->flush();
                $response = "OK";
            }

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        } else {
            return $this->Redirect('/auth/');
        }
    }

    //----------------------removepaiement---------------------------------//

    /**
     * @Route("/remove-paiement/")
     * @Template()
     */
    public function removePaiementAction(Request $request)
    {
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {

            //----------- compte pour la gestion des produits du site ----------------//

            $id = $request->get("id");
            if ($id == "") {
                $response = "NO";
            } else {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:Paiement');
                $paiement = $repository->findOneById($id);
                $idFacture = $paiement->getIdFacture();
                $em->remove($paiement);
                $em->flush();

                $enc = 0;

                $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('backOfficeBundle:Paiement');

                $qb = $repo->createQueryBuilder('a');
                $qb->select('SUM(a.montant)');
                $qb->where('a.idFacture = :idFacture');
                $qb->setParameter('idFacture', $idFacture);

                $enc = $enc + $qb->getQuery()->getSingleScalarResult();

                $repository = $em->getRepository('backOfficeBundle:Facture');
                $facture = $repository->findOneById($idFacture);

                if ($enc == 0) {
                    $facture->setEtat("Envoyée");
                } else if ($enc < $facture->getTotal() && $enc > 0) {
                    $facture->setEtat("Partielle");
                } else if ($enc >= $facture->getTotal()) {
                    $facture->setEtat("Payée");
                }

                $em->flush();

                //----------- Modification facture-----------//
                $response = "OK";
            }

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }
    }


    //---------------------------sendFacture------------------------------------//

    /**
     * @Route("/send-facture/")
     * @Template()
     */
    public function sendFactureAction(Request $request)
    {
            $this->verifierSession("ADDF");
            $id = $request->get("id");
            $msg = $request->get("msg");
            $obj = $request->get("obj");
            if ($id == "" || empty($msg) || empty($obj)) {
                return $this->Redirect('/list-facture/');
            }
            ini_set('memory_limit', '256M');

            //--------------- GET Facture -------------- //

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Facture');
            $facture = $repository->findOneById($id);

            if (!$facture) {
                return $this->Redirect('/list-facture/');
            }


            //---------------- GET DETAIL ----------------//

            $repository = $em->getRepository('backOfficeBundle:detail_facture');
            $detail = $repository->findByIdFacture($facture->getId());

            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('backOfficeBundle:detail_facture');

            $qb = $repo->createQueryBuilder('a');
            $qb->select('a.tva');
            $qb->where('a.idFacture = :idFacture');
            $qb->setParameter('idFacture', $facture->getId());

            $tv = $qb->getQuery()->getResult();
            $tva = array_map('current', $tv);

            $resultTva = array_unique($tva);

            $responseTva = array();
            $someHT = 0;
            for ($i = 0; $i < count($resultTva); $i++) {
                $some = 0;
                for ($j = 0; $j < count($detail); $j++) {
                    if (floatval($resultTva[$i]) == floatval($detail[$j]->getTva())) {
                        $some = $some + $detail[$j]->getTotalHT();
                    }
                }
                $responseTva[$i]['tva'] = $resultTva[$i];
                $responseTva[$i]['total'] = ($some * floatval($resultTva[$i])) / 100;
                $someHT = $someHT + $some;
            }


            //-----------------GET CLIENT ---------------//

            $repository = $em->getRepository('backOfficeBundle:client');
            $client = $repository->findOneById($facture->getIdClient());
            $repository = $em->getRepository('backOfficeBundle:entreprise');
            $entreprise = $repository->find(1);

            //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
            $html = $this->renderView('@backOffice/templates/model2.html.twig', array("entreprise" => $entreprise, "facture" => $facture, "detail" => $detail, "client" => $client, "tva" => $responseTva, "totalHT" => $someHT, "type" => "facture"));

            //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
            //le sens de la page "portrait" => p ou "paysage" => l
            //le format A4,A5...
            //la langue du document fr,en,it...
            $html2pdf = new Html2Pdf();

            //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
            //fullpage : affiche la page entière sur l'écran
            //fullwidth : utilise la largeur maximum de la fenêtre
            //real : utilise la taille réelle
            $html2pdf->pdf->SetDisplayMode('real');

            //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
            $html2pdf->writeHTML($html);

            //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
            //$html2pdf->Output('Facture-n-' . $facture->getNumero() . '.pdf');

            $to = $client->getEmail();
            $from = "contact@benmusic.com";
            $subject = $obj;
            $message = $msg;
            $separator = md5(time());
            $eol = PHP_EOL;
            $filename = "facture-n-" . $facture->getNumero() . ".pdf";
            $pdfdoc = $html2pdf->Output('', 'S');
            $attachment = chunk_split(base64_encode($pdfdoc));


            $headers = "From: " . $from . $eol;
            $headers .= "MIME-Version: 1.0" . $eol;
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;


            $body = "Content-Transfer-Encoding: 7bit" . $eol;
            $body .= "This is a MIME encoded message." . $eol; //had one more .$eol


            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
            $body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
            $body .= $message . $eol;


            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
            $body .= "Content-Transfer-Encoding: base64" . $eol;
            $body .= "Content-Disposition: attachment" . $eol . $eol;
            $body .= $attachment . $eol;
            $body .= "--" . $separator . "--";


            $sendM = mail($to, $subject, $body, $headers);
            $response = "NO";
            if ($sendM == true) {
                $facture->setEtat("Envoyée");
                $em->flush();
                $response = "OK";
            }


            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }


    //--------------------------view facture--------------------------------//

    /**
     * @Route("/view-facture/")
     * @Template()
     */
    public function viewFactureAction(Request $request)
    {
        $this->verifierSession("ADDF");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/auth/");
        }
            $id = $request->get("id");
            if ($id == "") {
                return $this->Redirect('/list-facture/');
            }
            $response = "";
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository("backOfficeBundle:Facture");
            $facture = $repository->findOneById($id);

            if (!$facture) {
                return $this->Redirect('/list-facture/');
            }
            $repository = $em->getRepository("backOfficeBundle:client");
            $c = $repository->findOneById($facture->getIdClient());

            $repository = $em->getRepository("backOfficeBundle:Paiement");
            $pai = $repository->findByIdFacture($facture->getId());

            $enc = 0;

            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository("backOfficeBundle:Paiement");

            $qb = $repo->createQueryBuilder('a');
            $qb->select('SUM(a.montant)');
            $qb->where('a.idFacture = :idFacture');
            $qb->setParameter('idFacture', $facture->getId());

            $enc = $enc + $qb->getQuery()->getSingleScalarResult();

            if ($request->getMethod() == "POST") {
                if ($request->get("formName") == "addPaiement") {
                    if (empty($_POST["montant"])) {
                        $response = "Le montant du paiement est obligatoire !";
                    } else {
                        if (floatval($_POST["montant"]) == 0) {
                            $response = "Verifiez le montant du paiement !";
                        } else {
                            $paiement = new Paiement();
                            $paiement->setDate(new \DateTime());
                            $paiement->setIdFacture($facture->getId());
                            $paiement->setMontant($_POST["montant"]);
                            $paiement->setObservation($_POST["observation"]);

                            $em->persist($paiement);
                            $em->flush();

                            //---------

                            $enc = 0;

                            $repo = $this->getDoctrine()
                                ->getManager()
                                ->getRepository("backOfficeBundle:Paiement");

                            $qb = $repo->createQueryBuilder('a');
                            $qb->select('SUM(a.montant)');
                            $qb->where('a.idFacture = :idFacture');
                            $qb->setParameter('idFacture', $facture->getId());

                            $enc = $enc + $qb->getQuery()->getSingleScalarResult();


                            if ($enc < $facture->getTotal()) {
                                $facture->setEtat("Partielle");
                            } else if ($enc >= $facture->getTotal()) {
                                $facture->setEtat("Payée");
                            }

                            $em->flush();

                            return $this->Redirect('/view-facture/?id=' . $facture->getId());
                        }
                    }
                }
            }

            return $this->render('@backOffice/Default/viewFacture.html.twig', array("response" => $response, "facture" => $facture, "client" => $c->getRs(), "paiement" => $pai, "sommePaiement" => $enc, "user" => $session->get("user")));

    }


    //----------------------------------listFacture---------------------------//

    /**
     * @Route("/list-facture/")
     * @Template()
     */
    public function listFactureAction(Request $request)
    {
        $this->verifierSession("CONSF");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }


            $response = "";
            $em = $this->getDoctrine()->getManager();
            if ($request->getMethod() == "POST") {
                //$or = "order by numero asc";
                $rsm = new ResultSetMappingBuilder($em);
                $rsm->addRootEntityFromClassMetadata('backOfficeBundle:Facture', 'f');

                $query = 'SELECT f.* FROM facture f WHERE 1 ';
                $params = array();

                if ($request->get("num") != "") {
                    $query .= 'AND numero = :num ';
                    $params['num'] = $request->get("num");
                }

                if ($request->get("client") != "") {
                    $repository = $em->getRepository('backOfficeBundle:client');
                    $client = $repository->findOneByRs($request->get("client"));
                    if ($client) {
                        $query .= 'AND idClient = :cl ';
                        $params['cl'] = $client->getId();
                    }
                }

                if ($request->get("dated") != "") {
                    $query .= 'AND date >= :d1 ';
                    $params['d1'] = $request->get("dated") . " 00:00:00";
                }

                if ($request->get("datef") != "") {
                    $query .= 'AND date <= :d2 ';
                    $params['d2'] = $request->get("datef") . " 23:59:59";
                }

                if (isset($_POST['etat'])) {
                    $etat = $_POST['etat'];
                    for ($i = 0; $i < count($etat); $i++) {
                        if ($i == 0) {
                            $query .= ' AND ( etat = :e' . $i . ' ';
                        } else {
                            $query .= ' OR etat = :e' . $i . ' ';
                        }
                        $params['e' . $i] = $etat[$i];
                    }
                    $query .= ') ';
                }

                //$query = $query." ".$or;
                $re = $em->createNativeQuery($query, $rsm);
                $re->setParameters($params);
                $fac = $re->getResult();
                if (!$fac) {
                    $response = "Aucune Facture trouvée ! ";
                }
            } else {
                $rep = $em->getRepository('backOfficeBundle:Facture');
                $fac = $rep->findby(array(), array("date" => "DESC"));
            }


            $factures = array();
            $devis = array();


            for ($i = 0; $i < count($fac); $i++) {
                $factures[$i]["facture"] = $fac[$i];
                $rep = $em->getRepository('backOfficeBundle:client');
                $client = $rep->findOneById($fac[$i]->getIdClient());

                $factures[$i]["client"] = $client->getRs();

                $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('backOfficeBundle:Paiement');

                $qb = $repo->createQueryBuilder('a');
                $qb->select('SUM(a.montant)');
                $qb->where('a.idFacture = :idFacture');
                $qb->setParameter('idFacture', $fac[$i]->getId());

                $enc = 0 + $qb->getQuery()->getSingleScalarResult();

                $factures[$i]["paiement"] = $enc;
            }

            $res = $this->get('knp_paginator')->paginate(
                $factures,
                $request->get('page', 1),
                50
            );

            return $this->render('@backOffice/Default/listFacture.html.twig', array("factures" => $res, "user" => $session->get("user"), "response" => $response, "devis" => $devis));

    }




    //-----------------------add Devis----------------------------//


    /**
     * @Route("/add-devis-site/")
     * @Template()
     */
    public function addDevis()
    {
        $this->verifierSession("ADDD");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            //----------- compte pour la gestion des produits du site ----------------//


            $response = "";
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository("backOfficeBundle:client");
            $client = $repository->findAll();

            //---------------//

            $repository = $em->getRepository("backOfficeBundle:Produit_Stock");
            $prod = $repository->findAll();

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new
            JsonEncoder()));
            $json = $serializer->serialize($prod, 'json');

            return $this->render('@backOffice/Default/addDevis.html.twig', array("response" => $response, "clients" => $client, "produits" => $json, "user" => $session->get("user")));

    }




    //---------------------------validation Devis--------------------------------//

    /**
     * @Route("/validation-devis/")
     * @Template()
     */
    public function validationdevisAction( Request $request)
    {
            $this->verifierSession("ADDD");


            $response = "OK";

            //------------Validation client-----------------//
            if (empty($_POST["rs"])) {
                $response = "Veuillez choisir un client ! ";
            } else {
                $em = $this->getDoctrine()->getManager();
                $id = 0;
                if ($request->get("actionClient") == "new")
                {
                    // create new client
                    $client = new client();
                    $client->setCreatedAt(new \DateTime());
                    $client->setActivit("");
                    $client->setAdresse($request->get("adresse"));
                    $client->setEmail($request->get("email"));
                    $client->setFax($request->get("fax"));
                    $client->setResponsable("");
                    $client->setRs($request->get("rs"));
                    $client->setTel($request->get("tel"));

                    $em->persist($client);
                    $em->flush();

                    $id = $client->getId();
                } else {
                    $id = $request->get("actionClient");
                }

                //------------Validation facture ---------------//

                if (empty($_POST["totalTTC"])) {
                    $response = "Verifiez votre devis, Quelque chose d'anormal semble exister !";
                } else {

                    //--------------Validation detail-------------//
                    if (!isset($_POST['desc'])) {
                        $response = "La facture ne contient aucun produit !";
                    } else {

                        $rep = $em->getRepository("backOfficeBundle:Devis");
                        $fac = $rep->findby(array(), array("date" => "DESC"), 1);

                        $numero = "1/" . date_format(new \DateTime(), "y");
                        if ($fac) {
                            $numeroF = explode("/", $fac[0]->getNumero());
                            if ($numeroF[1] == date_format(new \DateTime(), "y")) {
                                $n = $numeroF[0] + 1;
                                $numero = $n . "/" . $numeroF[1];
                            }
                        }
                        //----Create facture

                        $devis = new Devis();
                        $devis->setDate(new \DateTime());
                        $devis->setEtat("En attente");
                        $devis->setMonnaie("DH");
                        $devis->setTotal($request->get("totalTTC"));
                        $devis->setIdClient($id);
                        $devis->setModePaiement($request->get("paiement"));
                        $devis->setTerms($request->get("terms"));
                        //$token = "DE" . date("Yms") . "C" . $id;
                        $devis->setNumero($numero);
                        $devis->setIdFacture(0);
                        $devis->setToken("");

                        $em->persist($devis);
                        $em->flush();

                        $idD = $devis->getId();

                        $token = md5("DE" . $idD . "-" . date("Yms") . "C" . $id);
                        $devis->setToken($token);

                        $em->flush();

                        //------ Create detail



                        $desc = $_POST['desc'];
                        $puht = $_POST['puht'];
                        $qte = $_POST['qte'];
                        $ptht = $_POST['ptht'];
                        $tva = $_POST['tva'];
                        $ref = $_POST['refProd'];
                        $idProd = $_POST['idProd'];
                        for ($i = 0; $i < sizeof($desc); $i++) {

                            if (!empty($desc[$i])) {

                                $produitstock = $this->getDoctrine()->getRepository("backOfficeBundle:Produit_Stock")->find($idProd[$i]);
                                $detail = new detail_devis();
                                $detail->setIdProduit($idProd[$i]);
                                $detail->setIdDevis($idD);
                                $detail->setDescription($desc[$i]);
                                $detail->setPrixU($puht[$i]);
                                $detail->setQte($qte[$i]);
                                $detail->setTotalHT($ptht[$i]);
                                $detail->setTVA($tva[$i]);
                                $detail->setRef($produitstock->getReference());
                                $em->persist($detail);
                                $em->flush();
                            }
                        }

                        $response = $idD;
                    }

                }
            }

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));


    }


    //---------------------------view Devis------------------------//

    /**
     * @Route("/view-devis/")
     * @Template()
     */
    public function viewDevisAction(Request $request)
    {
        $this->verifierSession("ADDD");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }


            $id = $request->get("id");
            if ($id == "") {
                return $this->Redirect('/list-devis/');
            }
            $response = "";
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Devis');
            $devis = $repository->findOneById($id);

            if (!$devis) {
                return $this->Redirect('/list-devis/');
            }
            $repository = $em->getRepository('backOfficeBundle:client');
            $c = $repository->findOneById($devis->getIdClient());

            $repository = $em->getRepository('backOfficeBundle:Facture');
            $facture = $repository->findOneById($devis->getIdFacture());


            $repository = $em->getRepository('backOfficeBundle:Projet');
            $projet = $repository->findOneByIdDevis($id);


            return $this->render('@backOffice/Default/viewDevis.html.twig', array("response" => $response, "devis" => $devis, "client" => $c->getRs(), "user" => $session->get("user"), "facture" => $facture , "projet"=>$projet));

    }

//--------------------------showDevis------------------------------------//

    /**
     * @Route("/show-devis/")
     * @Template()
     */
    public function showDevisAction(Request $request)
    {
            $this->verifierSession("ADDD");
        $id = $request->get("id");
            if ($id == "") {
                return $this->Redirect('/list-devis/');
            }
            ini_set('memory_limit', '256M');

            //--------------- GET Facture -------------- //

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Devis');
            $facture = $repository->findOneById($id);

            if (!$facture) {
                return $this->Redirect('/list-devis/');
            }

            //---------------- GET DETAIL ----------------//

            $repository = $em->getRepository('backOfficeBundle:detail_devis');
            $detail = $repository->findByIdDevis($facture->getId());

            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('backOfficeBundle:detail_devis');

            $qb = $repo->createQueryBuilder('a');
            $qb->select('a.tva');
            $qb->where('a.idDevis = :idDevis');
            $qb->setParameter('idDevis', $facture->getId());

            $tv = $qb->getQuery()->getResult();
            $tva = array_map('current', $tv);

            $resultTva = array_unique($tva);

            $responseTva = array();
            $someHT = 0;
            for ($i = 0; $i < count($resultTva); $i++) {
                $some = 0;
                for ($j = 0; $j < count($detail); $j++) {
                    if (floatval($resultTva[$i]) == floatval($detail[$j]->getTva())) {
                        $some = $some + $detail[$j]->getTotalHT();
                    }
                }
                $responseTva[$i]['tva'] = $resultTva[$i];
                $responseTva[$i]['total'] = ($some * floatval($resultTva[$i])) / 100;
                $someHT = $someHT + $some;
            }


            //-----------------GET CLIENT ---------------//

            $repository = $em->getRepository('backOfficeBundle:client');
            $client = $repository->findOneById($facture->getIdClient());

            $repository = $em->getRepository('backOfficeBundle:entreprise');
            $entreprise = $repository->find(1);

            //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
            $html = $this->renderView('@backOffice/templates/model2.html.twig', array("entreprise" => $entreprise, "facture" => $facture, "detail" => $detail, "client" => $client, "tva" => $responseTva, "totalHT" => $someHT, "type" => "devis"));

            //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
            //le sens de la page "portrait" => p ou "paysage" => l
            //le format A4,A5...
            //la langue du document fr,en,it...
            $html2pdf = new Html2Pdf();
            //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
            //fullpage : affiche la page entière sur l'écran
            //fullwidth : utilise la largeur maximum de la fenêtre
            //real : utilise la taille réelle
            $html2pdf->pdf->SetDisplayMode('real');

            //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
            $html2pdf->writeHTML($html);

            //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
            $html2pdf->Output('Devis-n-' . $facture->getNumero() . '.pdf');


            return new Response();

    }


    //------------------updateDevis-------------------------------------------//

    /**
     * @Route("/update-devis/")
     * @Template()
     */
    public function updateDevisAction(Request $request)
    {
        $this->verifierSession("MODD");
        $session = new Session();
        if ($session->get("connect") && $session->get("connect") == "OK") {

            $id = $request->get("id");
            if ($id == "") {
                return $this->Redirect('/list-devis/');
            }
            $response = "";
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Devis');
            $devis = $repository->findOneById($id);

            if (!$devis) {
                return $this->Redirect('/list-devis/');
            }

            if ($devis->getEtat() == "Validé") {
                return $this->Redirect('/view-devis/?id=' . $devis->getId());
            }

            $repository = $em->getRepository('backOfficeBundle:detail_devis');
            $d = $repository->findByIdDevis($devis->getId());

            $repository = $em->getRepository('backOfficeBundle:client');
            $client = $repository->findAll();

            $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
            $prod = $repository->findAll();

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new
            JsonEncoder()));
            $json = $serializer->serialize($prod, 'json');

            return $this->render('@backOffice/Default/updateDevis.html.twig', array("user" => $session->get("user"), "devis" => $devis, "detail" => $d, "clients" => $client, "produits" => $json, "response" => "", "service" => $prod));

        } else {
            return $this->Redirect('/admin/');
        }
    }


    //---------------------------------validateupdatedevis-----------------------------------------//


    /**
     * @Route("/validation-update-devis/")
     * @Template()
     */
    public function validationupdatedevisAction(Request $request)
    {
        $this->verifierSession("MODD");
        $session = new Session();

            $response = "OK";
            //------------Validation infos------------------//

            if ($request->get("monnaie") == "--") {
                $response = "Veuillez choisir la monnaie ! ";
            } else {

                //------------Validation client-----------------//
                if (empty($_POST["rs"])) {
                    $response = "Veuillez choisir un client ! ";
                } else {
                    $em = $this->getDoctrine()->getManager();
                    $id = 0;
                    if ($request->get("actionClient") == "new") {
                        // create new client
                        $client = new Clients();
                        $client->setDateAjout(new \DateTime());
                        $client->setActivite("");
                        $client->setAdresse($request->get("adresse"));
                        $client->setEmail($request->get("email"));
                        $client->setFax($request->get("fax"));
                        $client->setResponsable("");
                        $client->setRs($request->get("rs"));
                        $client->setSite("");
                        $client->setTel($request->get("tel"));

                        $em->persist($client);
                        $em->flush();

                        $id = $client->getId();
                    } else {
                        $id = $request->get("actionClient");
                    }

                    //------------Validation facture ---------------//

                    if (empty($_POST["totalTTC"])) {
                        $response = "Verifiez votre devis, Quelque chose d'anormal semble exister !";
                    } else {

                        //--------------Validation detail-------------//
                        if (!isset($_POST['desc'])) {
                            $response = "Le devis ne contient aucun produit !";
                        } else {
                            //----Create facture
                            $idFacture = $request->get("idDevis");
                            if ($idFacture == "") {
                                return $this->Redirect('/list-facture/');
                            }
                            $em = $this->getDoctrine()->getManager();
                            $repository = $em->getRepository('backOfficeBundle:Devis');
                            $devis = $repository->findOneById($idFacture);

                            if (!$devis) {
                                return $this->Redirect('/list-devis/');
                            }

                            $devis->setTotal($request->get("totalTTC"));
                            $devis->setIdClient($id);
                            $devis->setModePaiement($request->get("paiement"));
                            $devis->setTerms($request->get("terms"));

                            /*$em->persist($facture);*/
                            $em->flush();

                            $idF = $idFacture;

                            //------ Create detail
                            $desc = $_POST['desc'];
                            $puht = $_POST['puht'];
                            $qte = $_POST['qte'];
                            $ptht = $_POST['ptht'];
                            $tva = $_POST['tva'];
                            $ref = $_POST['refProd'];
                            $idProd = $_POST['idProd'];
                            $idDet = $_POST['idDet'];
                            for ($i = 0; $i < sizeof($desc); $i++) {
                                if (!empty($desc[$i])) {
                                    if ($idDet[$i] == 0) {
                                        $detail = new detail_devis();
                                        $detail->setIdProduit($idProd[$i]);
                                        $detail->setIdDevis($idF);
                                        $detail->setDescription($desc[$i]);
                                        $detail->setPrixU($puht[$i]);
                                        $detail->setQte($qte[$i]);
                                        $detail->setTotalHT($ptht[$i]);
                                        $detail->setTva($tva[$i]);
                                        $detail->setRef($ref[$i]);
                                        $em->persist($detail);
                                        $em->flush();

                                    } else {
                                        $em = $this->getDoctrine()->getManager();
                                        $repository = $em->getRepository('backOfficeBundle:detail_devis');
                                        $detail = $repository->findOneById($idDet[$i]);

                                        $q = $detail->getQte();

                                        $detail->setIdProduit($idProd[$i]);
                                        $detail->setIdDevis($idF);
                                        $detail->setDescription($desc[$i]);
                                        $detail->setPrixU($puht[$i]);
                                        $detail->setQte($qte[$i]);
                                        $detail->setTotalHT($ptht[$i]);
                                        $detail->setTVA($tva[$i]);
                                        $detail->setRef($ref[$i]);
                                        $em->persist($detail);
                                        $em->flush();
                                    }
                                }
                            }

                            $response = "OK";

                        }

                    }
                }

            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }

//---------------------------DeleteDevis------------------------------------------//

    /**
     * @Route("/delete-devis/")
     * @Template()
     */
    public function deleteDevisAction(Request $request)
    {
        $this->verifierSession("SUPD");



            $id = $request->get("id");
            $response = "";
            if ($id == "") {
                return $this->Redirect('/list-facture/');
            }

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Devis');
            $devis = $repository->findOneById($id);


            // delete detail

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:detail_devis');
            $detail = $repository->findByIdDevis($id);
            for ($i = 0; $i < count($detail); $i++) {
                if ($devis->getEtat() == "Validé") {
                    if ($devis->getIdFacture() == 0) {
                        $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
                        $produit = $repository->findOneById($detail[$i]->getIdProduit());

                        if ($produit) {
                            $produit->setQte($produit->getQte() + $detail[$i]->getQte());
                            if ($produit->getQte() > $produit->getQte()) {
                                $produit->setQte($produit->getQte() + $detail[$i]->getQte());
                            }
                        }
                    }
                }
                $em->remove($detail[$i]);
                $em->flush();
            }

            // delete facture


            $em->remove($devis);
            $em->flush();

            $response = "OK";

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }



    //----------------------------validerdevis-------------------------------------//

    /**
     * @Route("/etat-validation-devis/")
     * @Template()
     */
    public function etatValidationDevisAction(Request $request)
    {
        $this->verifierSession("ADDD");
            $id = $request->get("id");
            if ($id == "") {
                $response = "Une erreur s'est produite !";
            } else {

                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:Devis');
                $devis = $repository->findOneById($id);

                if ($devis) {
                    $response = "OK";
                    $repository = $em->getRepository('backOfficeBundle:detail_devis');
                    $detail = $repository->findByIdDevis($id);

                    //----test if all stock is ok
                    $responseTest = "";
                    $test = true;
                    for ($i = 0; $i < count($detail); $i++) {
                        $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
                        $produit = $repository->findOneById($detail[$i]->getIdProduit());
                        if ($produit) {
                            if ($produit->getQte() < $detail[$i]->getQte()) {
                                $test = false;
                                $responseTest = $responseTest . "<br/>Produit => " . $produit->getTitre() . " : hors stock (Quantité demandée : " . $detail[$i]->getQte() . " / Reste dans le stock : " . $produit->getQte() . " )";
                            }
                        }
                    }

                    if ($test) {
                        for ($i = 0; $i < count($detail); $i++) {
                            $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
                            $produit = $repository->findOneById($detail[$i]->getIdProduit());
                            if ($produit) {
                                $produit->setQte($produit->getQte() - $detail[$i]->getQte());
                                $em->flush();
                            }
                        }

                        $devis->setEtat("Validé");
                        $em->flush();

                        $response = "OK";
                    } else {
                        $response = "Erreur stock : " . $responseTest;
                    }
                } else {
                    $response = "Une erreur s'est produite !";
                }
            }

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }



//---------------------------------sendDevis----------------------------------//

    /**
     * @Route("/send-devis/")
     * @Template()
     */
    public function sendDevisAction()
    {
            $this->verifierSession("ADDD");

            $request = $this->get("request");
            $id = $request->get("id");
            $msg = $request->get("msg");
            $obj = $request->get("obj");
            if ($id == "" || empty($msg) || empty($obj)) {
                return $this->Redirect('/list-facture/');
            }
            ini_set('memory_limit', '256M');

            //--------------- GET Facture -------------- //

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Devis');
            $facture = $repository->findOneById($id);

            if (!$facture) {
                return $this->Redirect('/list-devis/');
            }

            //---------------- GET DETAIL ----------------//

            $repository = $em->getRepository('backOfficeBundle:detail_devis');
            $detail = $repository->findByIdDevis($facture->getId());

            $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('backOfficeBundle:detail_devis');

            $qb = $repo->createQueryBuilder('a');
            $qb->select('a.tva');
            $qb->where('a.idDevis = :idDevis');
            $qb->setParameter('idDevis', $facture->getId());

            $tv = $qb->getQuery()->getResult();
            $tva = array_map('current', $tv);

            $resultTva = array_unique($tva);

            $responseTva = array();
            $someHT = 0;
            for ($i = 0; $i < count($resultTva); $i++) {
                $some = 0;
                for ($j = 0; $j < count($detail); $j++) {
                    if (floatval($resultTva[$i]) == floatval($detail[$j]->getTva())) {
                        $some = $some + $detail[$j]->getTotalHT();
                    }
                }
                $responseTva[$i]['tva'] = $resultTva[$i];
                $responseTva[$i]['total'] = ($some * floatval($resultTva[$i])) / 100;
                $someHT = $someHT + $some;
            }


            //-----------------GET CLIENT ---------------//

            $repository = $em->getRepository('backOfficeBundle:client');
            $client = $repository->findOneById($facture->getIdClient());
            $repository = $em->getRepository('backOfficeBundle:entreprise');
            $entreprise = $repository->find(1);

            //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
            $html = $this->renderView('@backOffice/templates/model2.html.twig', array("entreprise" =>  $entreprise, "facture" => $facture, "detail" => $detail, "client" => $client, "tva" => $responseTva, "totalHT" => $someHT, "type" => "devis"));

            //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
            //le sens de la page "portrait" => p ou "paysage" => l
            //le format A4,A5...
            //la langue du document fr,en,it...
            $html2pdf = new Html2Pdf();

            //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
            //fullpage : affiche la page entière sur l'écran
            //fullwidth : utilise la largeur maximum de la fenêtre
            //real : utilise la taille réelle
            $html2pdf->pdf->SetDisplayMode('real');

            //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
            $html2pdf->writeHTML($html);

            //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
            //$html2pdf->Output('Devis-n-'.$facture->getNumero().'.pdf');


            $to = $client->getEmail();
            $from = "";
            $subject = $obj;
            $message = $msg;
            $separator = md5(time());
            $eol = PHP_EOL;
            $filename = "Devis-n-" . $facture->getNumero() . ".pdf";
            $pdfdoc = $html2pdf->Output('', 'S');
            $attachment = chunk_split(base64_encode($pdfdoc));


            $headers = "From: " . $from . $eol;
            $headers .= "MIME-Version: 1.0" . $eol;
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;


            $body = "Content-Transfer-Encoding: 7bit" . $eol;
            $body .= "This is a MIME encoded message." . $eol; //had one more .$eol


            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
            $body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
            $body .= $message . $eol;


            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
            $body .= "Content-Transfer-Encoding: base64" . $eol;
            $body .= "Content-Disposition: attachment" . $eol . $eol;
            $body .= $attachment . $eol;
            $body .= "--" . $separator . "--";


            $sendM = mail($to, $subject, $body, $headers);
            $response = "NO";
            if ($sendM == true) {
                $facture->setEtat("Envoyé");
                $em->flush();
                $response = "OK";
            }


            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
    }

    //-----------------------------------DevisToFacture---------------------------//

    /**
     * @Route("/devis-to-facture/")
     * @Template()
     */
    public function devisToFactureAction(Request $request)
    {
        $this->verifierSession("ADDD");

            $id = $request->get("id");
            if ($id == "") {
                $response = "Une erreur s'est produite !";
            } else {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('backOfficeBundle:Devis');
                $devis = $repository->findOneById($id);

                if ($devis) {
                    $response = "OK";
                    $repository = $em->getRepository('backOfficeBundle:detail_devis');
                    $detailDevis = $repository->findByIdDevis($id);

                    $rep = $em->getRepository('backOfficeBundle:Facture');
                    $fac = $rep->findby(array(), array("date" => "DESC"), 1);

                    $numero = "1/" . date_format(new \DateTime(), "y");
                    if ($fac) {
                        $numeroF = explode("/", $fac[0]->getNumero());
                        if ($numeroF[1] == date_format(new \DateTime(), "y")) {
                            $n = $numeroF[0] + 1;
                            $numero = $n . "/" . $numeroF[1];
                        }
                    }

                    $facture = new Facture();
                    $facture->setDate(new \DateTime());
                    $facture->setEchance(new \DateTime());
                    $facture->setEtat("Crée");
                    $facture->setMonnaie($devis->getMonnaie());
                    $facture->setTotal($devis->getTotal());
                    $facture->setIdClient($devis->getIdClient());
                    $facture->setModePaiement($devis->getModePaiement());
                    $facture->setTerms($devis->getTerms());
                    $facture->setToken("");
                    //$num = "FA" . date("Yms") . "C" . $id;
                    $facture->setNumero($numero);

                    $em->persist($facture);
                    $em->flush();

                    $idF = $facture->getId();

                    $token = md5("DE" . $idF . "-" . date("Yms") . "C" . $id);
                    $facture->setToken($token);

                    $em->flush();

                    for ($i = 0; $i < count($detailDevis); $i++) {

                        $detail = new detail_Facture();
                        $detail->setIdProduitStock($detailDevis[$i]->getIdProduit());
                        $detail->setIdFacture($idF);
                        $detail->setDescription($detailDevis[$i]->getDescription());
                        $detail->setPrixU($detailDevis[$i]->getPrixU());
                        $detail->setQte($detailDevis[$i]->getQte());
                        $detail->setTotalHT($detailDevis[$i]->getTotalHT());
                        $detail->setTVA($detailDevis[$i]->getTVA());
                        $detail->setRef($detailDevis[$i]->getRef());
                        $em->persist($detail);
                        $em->flush();
                    }

                    $devis->setIdFacture($idF);
                    $em->flush();

                    $response = "OK";

                    //$facture->set
                } else {
                    $response = "Une erreur s'est produite !";
                }
            }

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
    }



    //-------------------------------list de devis------------------------------//

    /**
     * @Route("/list-devis/")
     * @Template()
     */
    public function listDevisAction(Request $request)
    {
        $this->verifierSession("CONSD");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/auth/");
        }
            $response = "";
            $em = $this->getDoctrine()->getManager();
            if ($request->getMethod() == "POST") {
                //$or = "order by numero asc";
                $rsm = new ResultSetMappingBuilder($em);
                $rsm->addRootEntityFromClassMetadata('backOfficeBundle:Devis', 'f');

                $query = 'SELECT f.* FROM devis f WHERE 1 ';
                $params = array();

                if ($request->get("num") != "") {
                    $query .= 'AND numero = :num ';
                    $params['num'] = $request->get("num");
                }

                if ($request->get("client") != "") {
                    $repository = $em->getRepository('backOfficeBundle:client');
                    $client = $repository->findOneByRs($request->get("client"));
                    if ($client) {
                        $query .= 'AND idClient = :cl ';
                        $params['cl'] = $client->getId();
                    }
                }

                if ($request->get("dated") != "") {
                    $query .= 'AND date >= :d1 ';
                    $params['d1'] = $request->get("dated") . " 00:00:00";
                }

                if ($request->get("datef") != "") {
                    $query .= 'AND date <= :d2 ';
                    $params['d2'] = $request->get("datef") . " 23:59:59";
                }

                if (isset($_POST['etat'])) {
                    $etat = $_POST['etat'];
                    for ($i = 0; $i < count($etat); $i++) {
                        if ($i == 0) {
                            $query .= ' AND ( etat = :e' . $i . ' ';
                        } else {
                            $query .= ' OR etat = :e' . $i . ' ';
                        }
                        $params['e' . $i] = $etat[$i];
                    }
                    $query .= ') ';
                }

                //$query = $query." ".$or;
                $re = $em->createNativeQuery($query, $rsm);
                $re->setParameters($params);
                $fac = $re->getResult();
                if (!$fac) {
                    $response = "Aucune Facture trouvée ! ";
                }
            } else {
                $rep = $em->getRepository('backOfficeBundle:Devis');
                $fac = $rep->findby(array(), array("date" => "DESC"));
            }
            $devis = array();

            for ($i = 0; $i < count($fac); $i++) {
                $devis[$i]["devis"] = $fac[$i];
                $rep = $em->getRepository('backOfficeBundle:client');
                $client = $rep->findOneById($fac[$i]->getIdClient());

                $devis[$i]["client"] = $client->getRs();
            }

            $res = $this->get('knp_paginator')->paginate(
                $devis,
                $request->get('page', 1),
                50
            );

            return $this->render('@backOffice/Default/listDevis.html.twig', array("devis" => $res, "user" => $session->get("user")));
        }



    //---------------------addProduitStock-------------------//

    /**
     * @Route("/add-ProduitStock/")
     * @Template()
     */
    public function addProduitStockAction()
    {
        $this->verifierSession("ADDPS");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

            $em = $this->getDoctrine()->getManager();

            $repository = $em->getRepository('backOfficeBundle:categorie');
            $categorie = $repository->findAll();

            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $sousgategorie = $repository->findAll();

            $repository = $em->getRepository('backOfficeBundle:Produitpremier');
            $produitpremier = $repository->findAll();


            return $this->render('@backOffice/Default/addProuduitStock.html.twig', array("user" => $session->get("user"), "categorie" => $categorie, "souscat" => $sousgategorie, "produitmp" => $produitpremier));

    }


    //--------------------addproductStockBD---------------------------------//


    /**
     * @Route("/add-product-db/")
     * @Template()
     */
    public function addProductDbAction(Request $request)
    {
        $this->verifierSession("ADDPS");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/auth/");
        }
            $categorie = $request->get("souscategorie");
            $titre = $request->get("titre");
            $description = $request->get("description");
            $prixHT = $request->get("ht");
            $tva = $request->get("tva");
            $ttc = $request->get("ttc");
            $qte = $request->get("qnt");
            $site = $request->get("addSite");
            $prixSite = $request->get("prixSite");
            $response = "";
            if (empty($categorie) || empty($titre) || empty($description) || empty($prixHT) || empty($tva) || empty($qte)) {
                $response = "Tous les champs sont obligatoires 111!";
            } else if (empty($categorie) || $categorie == "--") {
                $response = "Veuillez selectionner une catégorie";
            } else {
                if ($prixHT < 0) {
                    $response = "Le prix ne peux pas être negatif !";
                } else {
                    if ($qte < 0) {
                        $response = "La quantité du produit ne peut pas être inferieur à 0";
                    } else {

                        $em = $this->getDoctrine()->getManager();
                        $produit = new Produit_Stock();
                        $produit->setTitre($titre);
                        $produit->setDateAjout(new \DateTime());
                        $produit->setDescription($description);
                        $produit->setIdCategorie($categorie);
                        $produit->setPrixtva($tva);
                        $produit->setPrixHT($prixHT);
                        $produit->setPrixttc($ttc);
                        $produit->setQte($qte);
                        $produit->setReference("");

                        $maxNum = $em
                            ->createQuery("select max(p.id) from backOfficeBundle:Produit_Stock p")
                            ->getSingleScalarResult();
                        if (!$maxNum) {
                            $maxNum = 0;
                        }
                        $Reference = "#P-/" . ($maxNum + 1);

                        $produit->setReference($Reference);
                        $em->flush();

                        if (isset($_FILES["fichier"])) {
                            $file = $_FILES["fichier"];
                            $resp = $this->AddImage($file, "piecejoint");
                            if ($resp["response"] == "OK") {
                                $produit->setUrlfile($resp["response1"]);
                            } else {
                                $response = $resp["response"];
                            }
                        }
                        $em->persist($produit);
                        $em->flush();

                        $idP = 0;
                        if ($site == 1) {
                            $produitSite = new produitsite();
                            $produitSite->setDateAjout(new \DateTime());
                            $produitSite->setDescription($description);
                            $produitSite->setTitre($titre);
                            $produitSite->setLibelle("");
                            $produitSite->setRef("");
                            $produitSite->setIdCategorie($categorie);
                            $produitSite->setPrix($prixSite);
                            $produitSite->setNewPrix(0);
                            $produitSite->setVideo("");
                            $produitSite->setDisp(1);
                            $em->persist($produitSite);
                            $em->flush();

                            $ref = "#P-" . $produitSite->getId() . "/" . date_format($produitSite->getDateAjout(), "md");
                            $produitSite->setRef($ref);
                            $em->flush();

                            $idP = $produitSite->getId();


                            $produitinfo = new produit_info();
                            $produitinfo->setIdProduit($produitSite->getId());
                            $produitinfo->setPrix($prixSite);
                            $produitinfo->setQteStock($qte);
                            $produitinfo->setTitleTaille("-");
                            $produitinfo->setValeurTaille("");
                            $em->persist($produitinfo);
                            $em->flush();
                        }


                        $pmp = $request->get("idmp");
                        $qte = $request->get("qte");
                        for ($i = 0; $i < sizeof($pmp); $i++) {
                            $detailstock = new Detail_Stock();
                            $detailstock->setIdProduitMP($pmp[$i]);
                            $detailstock->setIdProduitStock($produit->getId());
                            $detailstock->setQte($qte[$i]);
                            $em->persist($detailstock);
                            $em->flush();
                            $repository = $em->getRepository("backOfficeBundle:Produitpremier");
                            $prod = $repository->find($pmp[$i]);
                            if ($prod) {
                                $prod->setQuantiter($prod->getQuantiter() - $qte[$i]);
                                $em->flush();
                            }

                        }

                        $response = "OK-" . $idP;

                    }
                }
            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
    }

    //---------------------updateProduitStock-----------------------//

    /**
     * @Route("/update-productstock-db/{id}/")
     * @Template()
     */
    public function updateProduct($id)
    {
        $this->verifierSession("MODFPS");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/auth/");
        }

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
            $product = $repository->findOneById($id);

            if (!$product) {
                return $this->redirect("/list-product/");
            }

            $repository = $em->getRepository('backOfficeBundle:categorie');
            $categorie = $repository->findAll();


            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $souscategorie = $repository->findOneById($product->getIdCategorie());

            //-----categorie selectione


            $repository = $em->getRepository('backOfficeBundle:images');
            $images = $repository->findByIdProduct($id);


            $repository = $em->getRepository('backOfficeBundle:attribute_color');
            $colors = $repository->findAll();

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $colorsProduct = $repository->findByIdProduct($id);


            $repository = $em->getRepository('backOfficeBundle:Detail_Stock');
            $produit = $repository->findByIdProduitStock($id);

            $table = array();
            for ($i = 0; $i < count($produit); $i++) {
                $table[$i]["produit"] = $produit[$i];
                $produitmp = $this->getDoctrine()->getRepository("backOfficeBundle:Produitpremier")->find($produit[$i]->getIdProduitMP());
                $table[$i]["produitmp"] = $produitmp;

            }


            return $this->render('@backOffice/Default/updateProduitStock.html.twig', array("user" => $session->get("user"), "categorie" => $categorie, "souscategorie" => $souscategorie, "produit" => $product, "images" => $images, "colors" => $colors, "colorProduct" => $colorsProduct, "produits" => $table));


        }

    //-----------------------------updateProcuctStockDb---------------------------------------//

    /**
     * @Route("/update-product-db/")
     * @Template()
     */
    public function updateProductstock(Request $request)
    {
        $this->verifierSession("MODFPS");



            $categorie = $request->get("souscategorie");
            $titre = $request->get("titre");
            $description = $request->get("description");
            $prixHT = $request->get("ht");
            $tva = $request->get("tva");
            $ttc = $request->get("ttc");
            $qte = $request->get("qnt");

            $response = "";
            if (!isset($categorie) || !isset($titre) || !isset($description) || !isset($prixHT) || !isset($tva) || !isset($qte)) {
                $response = "Tous les champs sont obligatoires !";
            } else if (empty($titre) || empty($description)) {
                $response = "Tous les champs sont obligatoires !";
            } else if (empty($categorie) || $categorie == "--") {
                $response = "Veuillez selectionner une catégorie";
            } else {
                if ($prixHT < 0) {
                    $response = "Le prix ne peux pas être negatif !";
                } else {
                    if ($qte < 0) {
                        $response = "La quantité du produit ne peut pas être inferieur à 0";
                    } else {

                        $em = $this->getDoctrine()->getManager();
                        $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
                        $produitstock = $repository->findOneById($_GET["id"]);

                        if ($produitstock) {

                            $produitstock->setTitre($titre);
                            $produitstock->setDescription($description);
                            $produitstock->setIdCategorie($categorie);
                            $produitstock->setprixtva($tva);
                            $produitstock->setPrixHT($prixHT);
                            $produitstock->setPrixTTC($ttc);
                            $produitstock->setQte($qte);

                            if (isset($_FILES["fichier"])) {
                                $resp = $this->AddImage($_FILES["fichier"], "piecejoint");
                                if ($resp["response"] == "OK") {
                                    $produitstock->setUrlfile($resp["response1"]);
                                    $em->persist($produitstock);
                                    $em->flush();

                                } else {
                                    $response = $resp["response"];
                                }

                                $em->flush();


                                $response = "OK";
                            } else {
                                $response = "Une erreur s'est produite !";
                            }


                        }
                    }
                }

            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }



    //------------------------------deleteProduct-----------------------------//

    /**
     * @Route("/delete-product/")
     * @Template()
     */
    public function deleteProductAction(Request $request)
    {
        $this->verifierSession("SUPPS");


            $id = $request->get("id");
            $response = "";
            if ($id == "") {
                return $this->Redirect('/list-product/');
            }

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Produit_Stock');
            $produit = $repository->findOneById($id);

            if (!$produit) {
                return $this->Redirect('/list-ProduitStock-site/');
            }


            $repository = $em->getRepository('backOfficeBundle:detail_facture');
            $detail = $repository->findByIdProduitStock($id);

            for ($i = 0; $i < count($detail); $i++) {
                $repository = $em->getRepository('backOfficeBundle:Facture');
                $facture = $repository->findOneById($detail[$i]->getIdFacture());
                if ($facture) {
                    if ($facture->getEtat() == "Crée") {
                        $pr = $detail[$i]->getTotalHT();
                        $tva = $detail[$i]->getTva();

                        $total = $pr + ($pr * $tva / 100);
                        $facture->setTotal($facture->getTotal() - $total);

                        if ($facture->getTotal() <= 0) {
                            // delete paiement

                            $em->remove($facture);
                        }
                        $em->flush();
                    }
                }
                $em->remove($detail[$i]);
                $em->flush();
            }

            $repository = $em->getRepository('backOfficeBundle:detail_devis');
            $detail = $repository->findByIdProduit($id);

            for ($i = 0; $i < count($detail); $i++) {
                $repository = $em->getRepository('backOfficeBundle:Devis');
                $devis = $repository->findOneById($detail[$i]->getIdDevis());
                if ($devis) {
                    if ($devis->getEtat() == "En attente") {
                        $pr = $detail[$i]->getTotalHT();
                        $tva = $detail[$i]->getTva();

                        $total = $pr + ($pr * $tva / 100);
                        $devis->setTotal($devis->getTotal() - $total);

                        if ($devis->getTotal() <= 0) {

                            $em->remove($devis);
                        }
                        $em->flush();
                    }
                }
                $em->remove($detail[$i]);
                $em->flush();
            }

            $em->remove($produit);
            $em->flush();


            $response = "OK";

            $res = new JsonResponse();
            return $res->setData(array("response" => $response));
        }





    //---------------------------------------addProjet----------------------------------//

    /**
     * @Route("/add-projet/{id}/")
     * @Template()
     */
    public function addProjet(Request $request , $id)
    {
        $this->verifierSession("ADDP");
        $produitpremier = $this->getDoctrine()->getRepository("backOfficeBundle:Produitpremier")->findAll();
        $projet = $this->getDoctrine()->getRepository("backOfficeBundle:Projet")->findOneByIdDevis($id);
        $devis = $this->getDoctrine()->getRepository("backOfficeBundle:Devis")->find($id);

        if($projet){
            return $this->redirect("/update-projet/".$projet->getId()."/");
        }

        else{

            if ($request->getMethod() == 'POST') {

                $date = $request->get('date');
                $titre = $request->get('titre');
                $description = $request->get('description');
                $em = $this->getDoctrine()->getManager();
                $response = "";
                if (empty($titre) or empty($description)) {
                    $response = "Les champs sont vide !";
                } else {
                    $projet = new Projet();
                    $projet->setDateAjout(new \DateTime($date))
                        ->setTitre($titre)
                        ->setdescription($description)
                        ->setEtat(0)
                        ->setIdDevis($devis->getId());
                    $em->persist($projet);
                    $em->flush();

                    $response = "success";
                    $pmp = $request->get("idmp");
                    $qte = $request->get("qte");

                    for ($i = 0; $i < sizeof($pmp); $i++) {
                        $detailprojet = new Detail_projet();
                        $detailprojet->setIdProduitMP($pmp[$i]);
                        $detailprojet->setQte($qte[$i]);
                        $detailprojet->setRest($qte[$i]);
                        $detailprojet->setIdProjet($projet->getId());
                        $em->persist($detailprojet);
                        $em->flush();

                        $repository = $em->getRepository("backOfficeBundle:Produitpremier");
                        $prod = $repository->find($pmp[$i]);
                        if ($prod) {
                            $prod->setQuantiter($prod->getQuantiter() - $qte[$i]);
                            $em->flush();
                        }

                    }

                    return $this->render('@backOffice/Default/addprojet.html.twig', array("response" => $response, "ppm" => $produitpremier));

                }
            }
        }

        return $this->render('@backOffice/Default/addprojet.html.twig', array("ppm" => $produitpremier));
    }






    //--------------------------listeprojet-----------------------------//


    /**
     * @Route("/list-projet/")
     * @Template()
     */
    public function listeprojet()
    {
        $this->verifierSession("CONSP");
        $projet = $this->getDoctrine()->getRepository("backOfficeBundle:Projet")->findAll();
        return $this->render('@backOffice/Default/listprojet.html.twig', array('projet' => $projet));


    }


//----------------------------updateprojet----------------------------//


    /**
     * @Route("/update-projet/{id}/")
     * @Template()
     */
    public function updateprojet($id , Request $request)
    {
        $this->verifierSession("MODP");
        $projet = $this->getDoctrine()->getRepository("backOfficeBundle:Projet")->find($id);
        $produit = $this->getDoctrine()->getRepository("backOfficeBundle:Detail_projet")->findByIdProjet($id);
        $produitpremier = $this->getDoctrine()->getRepository("backOfficeBundle:Produitpremier")->findAll();
        $table = array();
        for ($i = 0; $i < count($produit); $i++) {
            $table[$i]["produit"] = $produit[$i];
            $produitmp = $this->getDoctrine()->getRepository("backOfficeBundle:Produitpremier")->find($produit[$i]->getIdProduitMP());
            $table[$i]["produitmp"] = $produitmp;
        }

        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }

        if ($request->getMethod() == 'POST') {
            $date = $request->get('date');
            $titre = $request->get('titre');
            $description = $request->get('description');
            $etat = $request->get('etat');
            $em = $this->getDoctrine()->getManager();
            $response = "";
            if (empty($date) or empty($titre) or empty($description)) {
                $response = "Les champs sont vide !";
            }else{
                $projet->setDateAjout(new \DateTime($date))
                    ->setTitre($titre)
                    ->setdescription($description)
                    ->setEtat($etat);
                $em->flush();
                $response = "success";

                $pmp = $request->get("idmp");
                $qte = $request->get("qte");

                for ($i = 0; $i < sizeof($pmp); $i++) {
                    $detailprojet = new Detail_projet();
                    $detailprojet->setIdProduitMP($pmp[$i]);
                    $detailprojet->setQte($qte[$i]);
                    $detailprojet->setRest($qte[$i]);
                    $detailprojet->setIdProjet($projet->getId());
                    $em->persist($detailprojet);
                    $em->flush();

                    $repository = $em->getRepository("backOfficeBundle:Produitpremier");
                    $prod = $repository->find($pmp[$i]);
                    if ($prod) {
                        $prod->setQuantiter($prod->getQuantiter() - $qte[$i]);
                        $em->flush();
                    }

                }
                $produit = $this->getDoctrine()->getRepository("backOfficeBundle:Detail_projet")->findByIdProjet($id);
                $table = array();
                for ($i = 0; $i < count($produit); $i++) {
                    $table[$i]["produit"] = $produit[$i];
                    $produitmp = $this->getDoctrine()->getRepository("backOfficeBundle:Produitpremier")->find($produit[$i]->getIdProduitMP());
                    $table[$i]["produitmp"] = $produitmp;
                }
                return $this->render('@backOffice/Default/updateprojet.html.twig', array('prj' => $projet, "produit" => $table, "ppm" => $produitpremier ,"response"=>$response));


            }
            return $this->render('@backOffice/Default/updateprojet.html.twig', array('prj' => $projet, "produit" => $table, "ppm" => $produitpremier ,"response"=>$response));

        }

        return $this->render('@backOffice/Default/updateprojet.html.twig', array('prj' => $projet, "produit" => $table, "ppm" => $produitpremier));


    }


    //---------------------------DELETE PROJET-------------------------------//


    /**
     * @Route("/delete-projet/{id}/")
     * @Template()
     */
    public function deleteProjet($id)
    {
        $this->verifierSession("SUPP");


            $projet = $this->getDoctrine()->getRepository("backOfficeBundle:Projet")->find($id);
            $entityManager = $this->getDoctrine()->getManager();


            $entityManager->remove($projet);
            $entityManager->flush();
            $response = "OK";
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));


    }



    //--------------------augmenter le stock----------------------//

    /**
     * @Route("/Augementer-stock/{id}/")
     * @Template()
     */
    public function AugmenterStock($id)
    {
         $this->verifierSession("ADDPS");
        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        }
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('backOfficeBundle:Projet');
            $product = $repository->findOneById($id);

            if (!$product) {
                return $this->redirect("/list-projet/");
            }

            $repository = $em->getRepository('backOfficeBundle:categorie');
            $categorie = $repository->findAll();


            $repository = $em->getRepository('backOfficeBundle:souscategorie');
            $souscategorie = $repository->findAll();

            //-----categorie selectione


            $repository = $em->getRepository('backOfficeBundle:images');
            $images = $repository->findByIdProduct($id);


            $repository = $em->getRepository('backOfficeBundle:attribute_color');
            $colors = $repository->findAll();

            $repository = $em->getRepository('backOfficeBundle:color_product');
            $colorsProduct = $repository->findByIdProduct($id);


            $repository = $em->getRepository('backOfficeBundle:Detail_projet');
            $produit = $repository->findByIdProjet($id);

            $table = array();
            for ($i = 0; $i < count($produit); $i++) {
                $table[$i]["produit"] = $produit[$i];
                $produitmp = $this->getDoctrine()->getRepository("backOfficeBundle:Produitpremier")->find($produit[$i]->getIdProduitMP());
                $table[$i]["produitmp"] = $produitmp;

            }


            return $this->render('@backOffice/Default/AugmenterStock.html.twig', array("user" => $session->get("user"), "categorie" => $categorie, "souscategorie" => $souscategorie, "produit" => $product, "images" => $images, "colors" => $colors, "colorProduct" => $colorsProduct, "produits" => $table));




    }



    //--------------------augmenter le stock----------------------//


    /**
     * @Route("/add-stock/")
     * @Template()
     */
    public function addstock(Request $request)
    {

        $this->verifierSession("ADDPS");

            $categorie = $request->get("souscategorie");
            $titre = $request->get("titre");
            $description = $request->get("description");
            $prixHT = $request->get("ht");
            $tva = $request->get("tva");
            $ttc = $request->get("ttc");
            $qte = $request->get("qnt");
            $site = $request->get("addSite");
            $prixSite = $request->get("prixSite");
            $response = "";
            if (empty($categorie) || empty($titre) || empty($description) || empty($prixHT) || empty($tva) || empty($qte)) {
                $response = "Tous les champs sont obligatoires !";
            } else if (empty($categorie) || $categorie == "--") {
                $response = "Veuillez selectionner une catégorie";
            } else {
                if ($prixHT < 0) {
                    $response = "Le prix ne peux pas être negatif !";
                } else {
                    if ($qte < 0) {
                        $response = "La quantité du produit ne peut pas être inferieur à 0";
                    } else {

                        $em = $this->getDoctrine()->getManager();
                        $produit = new Produit_Stock();
                        $produit->setTitre($titre);
                        $produit->setDateAjout(new \DateTime());
                        $produit->setDescription($description);
                        $produit->setIdCategorie($categorie);
                        $produit->setPrixtva($tva);
                        $produit->setPrixHT($prixHT);
                        $produit->setPrixttc($ttc);
                        $produit->setQte($qte);
                        $produit->setReference("");

                        $ref = "#P-" . $produit->getId() . "/" . date_format($produit->getDateAjout(), "md");
                        $produit->setReference($ref);
                        $em->flush();

                        if (isset($_FILES["fichier"])) {
                            $file = $_FILES["fichier"];
                            $resp = $this->AddImage($file, "piecejoint");
                            if ($resp["response"] == "OK") {
                                $produit->setUrlfile($resp["response1"]);
                            } else {
                                $response = $resp["response"];
                            }
                        }
                        $em->persist($produit);
                        $em->flush();

                        $idP = 0;
                        if ($site == 1) {
                            $produitSite = new produitsite();
                            $produitSite->setDateAjout(new \DateTime());
                            $produitSite->setDescription($description);
                            $produitSite->setTitre($titre);
                            $produitSite->setLibelle("");
                            $produitSite->setRef("");
                            $produitSite->setIdCategorie($categorie);
                            $produitSite->setPrix($prixSite);
                            $produitSite->setNewPrix(0);
                            $produitSite->setVideo("");
                            $produitSite->setDisp(1);
                            $em->persist($produitSite);
                            $em->flush();

                            $ref = "#P-" . $produitSite->getId() . "/" . date_format($produitSite->getDateAjout(), "md");
                            $produitSite->setRef($ref);
                            $em->flush();

                            $idP = $produitSite->getId();


                            $produitinfo = new produit_info();
                            $produitinfo->setIdProduit($produitSite->getId());
                            $produitinfo->setPrix($prixSite);
                            $produitinfo->setQteStock($qte);
                            $produitinfo->setTitleTaille("-");
                            $produitinfo->setValeurTaille("");
                            $em->persist($produitinfo);
                            $em->flush();
                        }


                        $pmp = $request->get("prdDetail");
                        $qte = $request->get("qteDetail");
                        $idDetail = $request->get("idDetail");
                        for ($i = 0; $i < sizeof($pmp); $i++) {
                            $detailprojet = new Detail_Stock();
                            $detailprojet->setIdProduitMP($pmp[$i]);
                            $detailprojet->setIdProduitStock($produit->getId());
                            $detailprojet->setQte($qte[$i]);
                            $em->persist($detailprojet);
                            $em->flush();

                            $repository = $em->getRepository('backOfficeBundle:Detail_projet');
                            $detail = $repository->find($idDetail[$i]);
                            $detail->setRest($detail->getRest()-$qte[$i]);
                            $em->flush();
                        }

                        $response = "OK-" . $idP;

                    }
                }
            }
            $res = new JsonResponse();
            return $res->setData(array("response" => $response));

    }


//-----------------------------function file-------------------------


    function AddImage($file, $url)
    {
        $response1 = "";
        $response = "";
        $tabExt = array('jpg', 'gif', 'png', 'jpeg', 'pdf', 'txt');
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        if (in_array(strtolower($extension), $tabExt)) {
            $infosImg = getimagesize($file['tmp_name']);
            if (isset($_FILES['fichier']['error'])
                && UPLOAD_ERR_OK === $file['error']
            ) {
                $nomImage = md5(uniqid()) . '.' . $extension;
                if (move_uploaded_file($file['tmp_name'], "./Bundle/" . $url . "/" . $nomImage)) {
                    $url = "/Bundle/" . $url . "/" . $nomImage;
                    $response1 = $url;
                    $response = 'OK';
                } else {
                    $response = 'Problème lors de l\'upload !';
                }
            } else {
                $response = 'Une erreur interne a empêché l\'uplaod de l\'image';
            }
        } else {
            $response = 'L\'extension du fichier est incorrecte !'.$extension;
        }
        return array("response" => $response, "response1" => $response1);
    }

//----------------------------Siteweb--------------------------------------//
    /**
     * @Route("/siteWeb/")
     * @Template()
     */

    function siteWebAction(Request $request)
    {

        $session = new Session();
        if ($session->get("connect") != "OK" || $session->get("user") == null) {
            return $this->redirect("/admin/");
        } else {
            $em = $this->getDoctrine()->getManager();
            $response = "";
            if ($request->getMethod() == "POST") {

                $titre = $request->get("titre");
                $sTitre = $request->get("sTitre");
                $text = $request->get("text");

                $text1 = $request->get("text1");
                $titre1 = $request->get("titre1");
                $text2 = $request->get("text2");
                $titre2 = $request->get("titre2");
                $text3 = $request->get("text3");
                $titre3 = $request->get("titre3");
                $text4 = $request->get("text4");
                $titre4 = $request->get("titre4");
                $text5 = $request->get("text5");
                $titre5 = $request->get("titre5");

                $rep = $em->getRepository('backOfficeBundle:siteWeb');
                $site = $rep->find(1);

                $site->setBlock1($titre);
                $site->setBlock2($sTitre);
                $site->setBlock3($text);

                $site->setBlock4($titre1);
                $site->setBlock5($text1);
                $site->setBlock6($titre2);
                $site->setBlock7($text2);
                $site->setBlock8($titre3);
                $site->setBlock9($text3);
                $site->setBlock10($titre4);
                $site->setBlock11($text4);
                $site->setBlock12($titre5);
                $site->setBlock13($text5);

                $em->flush();

                $response = "OK";
            }

            $rep = $em->getRepository('backOfficeBundle:siteWeb');
            $site = $rep->find(1);

            return $this->render('@backOffice/Default/siteWeb.html.twig', array("s" => $site, "user" => $session->get("user"), "response" => $response));

        }
    }

    /**
     * @Route("/entreprise/")
     * @Template()
     */
    public function entreprise(Request $request)
    {

            $this->verifierSession("CONSEN");
            $em=$this->getDoctrine()->getManager();
            $repository = $em->getRepository(entreprise::Class);
            $response ="";
            $entr = $repository->findOneById(1);

            if($request->getMethod()=="POST")
            {
                $this->verifierSession("MODEN");
                $raisonsociale = $request->get("rs");
                $adresse = $request->get("adresse");
                $tel = $request->get("tel");
                $fax = $request->get("fax");
                $email = $request->get("email");
                $ice = $request->get("ice");
                $capital = $request->get("capital");
                $identifiantF = $request->get("identifiantF");
                $pattente = $request->get("pattente");
                $cnss = $request->get("cnss");
                $site = $request->get("site");
                if (empty($raisonsociale) or empty($adresse) or empty($tel) or empty($fax) or empty($email) or empty($ice) or empty($capital) or empty($identifiantF) or empty($pattente) or empty($cnss) or empty($site))
                { $response = "Les champs sont vide !";}
                else {
                    $entr->setRaisonSociale($raisonsociale);
                    $entr->setAdresse($adresse);
                    $entr->setTel($tel);
                    $entr->setFax($fax);
                    $entr->setEmail($email);
                    $entr->setIce($ice);
                    $entr->setCapital($capital);
                    $entr->setIdentifiantF($identifiantF);
                    $entr->setPattente($pattente);
                    $entr->setCnss($cnss);
                    $entr->setSite($site);
                    $em->flush();
                    $response = "success";
                }
            }
            return $this->render('@backOffice/Default/entreprise.html.twig', array('entreprise' => $entr ,"response" => $response));

    }


//-------------------------------------------------------------------------------------------------------------------//
    function verifierSession($codeFunction){
        $response=false;
        $session=new Session();
        if ($session->get('connect')!='OK' && $session->get('user')==null)
        {
            $this->routeToControllerName("/admin/");
        }
        else
        {
            $id=$session->get('user')->getId();
            $em=$this->getDoctrine()->getManager();
            $listeRole=$em->getRepository("backOfficeBundle:listRole")->findOneBy(array("code"=>$codeFunction));
            if ($listeRole)
            {
                $role=$em->getRepository("backOfficeBundle:roles")->findOneBy(array("idAdmin"=>$id,"idRole"=>$listeRole->getId(),"role"=>1));
                if ($role)
                {
                    $response=true;
                }
                else
                {
                    $this->routeToControllerName('/profil-admin/');
                }
            }else{
                $this->routeToControllerName('/profil-admin/');
            }
        }
        return $response;
    }

    //---------------functionRout------------------------//
    public function routeToControllerName($routename){
        $hasAccess = false;
        if(!$hasAccess){
            (new RedirectResponse($routename))->send();
            exit;
        }
    }
}
